<?php /**
 * @var \App\Models\Menu $menus
 * @var \App\Models\Menu $menuItem
 * */ ?>

@extends('admin.layouts.main')
@section('title','Menu Control')
@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Add to Menubar</h3>
                </div>
                <form action="{{route('admin.menu.store')}}" method="post">
                    @csrf
                    <div class="card-body">
                        <x-inputs.text label="Menu Name" name="name"></x-inputs.text>
                        <x-inputs.text label="Menu URL" name="url"></x-inputs.text>
                        <x-inputs.select label="Parent" name="parent_id">
                            <option value="0">None</option>
                        </x-inputs.select>
                        <x-inputs.number label="Priority" name="priority"></x-inputs.number>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Add to menu</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Menubar</h3>
                </div>
                <div class="card-body">
                    <div id="menubar-contain"></div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Edit</h3>
                </div>
                <form id="menuFormUpdate" action="" method="post">
                    @csrf
                    <div class="card-body">
                        <x-inputs.text label="Menu Name" name="name-edit"></x-inputs.text>
                        <x-inputs.text label="Menu URL" name="url-edit"></x-inputs.text>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-warning" onclick="checkValidUpdateData()">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push("styles")
    <link rel="stylesheet" href="{{asset("/admin/plugins/jstree/themes/default/style.css")}}">
    <style>
        .jstree-anchor {
            position: relative;
        }

        .jstree-icon {
            display: none !important;
        }

        .jstree-default .jstree-node, .jstree-default .jstree-icon {
            background-image: none;
        }

        .jstree-default .jstree-anchor {
            height: auto;
        }

        .jstree-anchor {
            display: inline-block;
            width: 100%;
            border: 1px solid gray;
            margin-bottom: 10px;
            border-radius: 5px;
            padding: 10px;
        }

        .jstree-default .jstree-node {
            margin-left: 30px;
        }

        .btn-delete-menu {
            position: absolute;
            top: 50%;
            right: 0;
            margin-right: 10px;
            transform: translateY(-50%);
            z-index: 1000;
        }
    </style>
@endpush
@push("scripts")
    <script src="{{asset("/admin/plugins/jstree/jstree.js")}}"></script>
    <script>
        let menuData = JSON.parse(`@json($menus)`);
        // Khởi tạo jstree
        $('#menubar-contain')
            .jstree({
                'core': {
                    'check_callback': true,
                    'data': menuData.map(menu => {
                        return {
                            id: menu.id,
                            parent: menu.parent_id == null ? "#" : menu.parent_id,
                            text: menu.name,
                            a_attr: {
                                "id": `menu-node-${menu.id}`
                            }
                        }
                    })
                },
                'plugins': ["dnd"]
            })
            .on('ready.jstree', function (data) {
                // Mở tất cả các node khi cây jstree đã sẵn sàng
                $(this).jstree("open_all");

                let menuNodeList = $(this).jstree(true).get_json('#', {flat: true});
                menuNodeList.map(nodeSelected => {
                    let menuNoteHTML = document.querySelector(`#menu-node-${nodeSelected.id}`)
                    let deleteButton = document.createElement("a")
                    deleteButton.innerHTML = "Delete"
                    deleteButton.classList.add("btn-sm")
                    deleteButton.classList.add("btn-danger")
                    deleteButton.classList.add("btn-delete-menu")
                    deleteButton.setAttribute('href', `/admin/menu/${nodeSelected.id}/delete`)
                    deleteButton.onclick = function () {
                        window.location = `/admin/menu/${nodeSelected.id}/delete`
                    }
                    menuNoteHTML.appendChild(deleteButton)
                })
            })
            .on("move_node.jstree", function (e, data) {
                // Khi di chuyển node, cập nhật lại menuData
                $(this).jstree("open_all");

                let movedNode = data.node;
                let newParent = data.parent === "#" ? null : data.parent;

                console.log("move node:", movedNode)
                console.log("new parent:", newParent)

                // Tìm node trong menuData và cập nhật parent_id
                let updatedNode = menuData.find(menu => menu.id == movedNode.id);
                if (updatedNode) {
                    updatedNode.parent_id = newParent;
                }

                // Sắp xếp lại priority
                let menuNodeList = $(this).jstree(true).get_json('#', {flat: true});
                let menuDataSave = menuNodeList.map(menuNode => {
                    return menuData.find(menu => menu.id == menuNode.id)
                })
                let priority = 1000;
                menuDataSave = menuDataSave.map(menu => {
                    return {
                        ...menu,
                        priority: priority--
                    }
                })

                console.log("Save Menu", menuDataSave)

                // Gửi AJAX để lưu menuData lên server nếu cần
                $.ajax({
                    url: "{{ route('admin.menu.update') }}", // URL để cập nhật menu
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        menuData: menuDataSave
                    },
                    success: function (response) {
                        console.log('Menu updated successfully', response);
                    },
                    error: function (xhr) {
                        console.error('Error updating menu', xhr);
                    }
                });

                // render lại note:
                menuNodeList.map(nodeSelected => {
                    let menuNoteHTML = document.querySelector(`#menu-node-${nodeSelected.id}`)
                    let deleteButton = document.createElement("a")
                    deleteButton.innerHTML = "Delete"
                    deleteButton.classList.add("btn-sm")
                    deleteButton.classList.add("btn-danger")
                    deleteButton.classList.add("btn-delete-menu")
                    deleteButton.setAttribute('href', `/admin/menu/${nodeSelected.id}/delete`)
                    deleteButton.onclick = function () {
                        window.location = `/admin/menu/${nodeSelected.id}/delete`
                    }
                    menuNoteHTML.appendChild(deleteButton)
                })
            }).on(
            "select_node.jstree", function (evt, data) {
                //selected node object: data.node;
                let inputNameEdit = document.querySelector("#input-name-edit")
                let inputUrlEdit = document.querySelector("#input-url-edit")
                let menuFormUpdate = document.querySelector("#menuFormUpdate")
                let nodeSelected = data.node
                let menuItem = menuData.find(menu => menu.id == nodeSelected.id)
                inputNameEdit.value = menuItem.name
                inputUrlEdit.value = menuItem.url
                menuFormUpdate.setAttribute("action", `/admin/menu/${menuItem.id}/update`)
            });

        function checkValidUpdateData() {
            let menuFormUpdate = document.querySelector("#menuFormUpdate")
            let check = menuFormUpdate.getAttribute("action")
            if (check === "") {
                return false
            } else {
                menuFormUpdate.submit()
            }
        }
    </script>
@endpush

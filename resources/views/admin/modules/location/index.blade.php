<?php /**
 * @var \App\Models\Province $province
 * @var \App\Models\Province $provinces
 * @var \App\Models\District $district
 * @var \App\Models\District $districts
 */ ?>
@extends("admin.layouts.main")
@section('title','Province & District')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h3 class="mb-0">Province List</h3>
                    <x-forms.button type="create" form-id="createLocationModal"></x-forms.button>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-bordered table-hover">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Province Name</th>
                                <th>Priority</th>
                                <th>District List</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($provinces as $province)
                                <tr>
                                    <th>{{$province->name}}</th>
                                    <th>{{$province->priority}}</th>
                                    <th>
                                        District List
                                    </th>
                                    <th>
                                        <a href="{{route('admin.location.listDistrict',['id'=>$province->id])}}"
                                           class="btn btn-info">Edit District</a>

                                        <x-forms.button type="update"
                                                        form-id="updateLocationModal{{$province->id}}">
                                        </x-forms.button>
                                        <a href="{{route('admin.location.province.delete',['id'=>$province->id])}}"
                                           class="btn btn-danger">Delete</a>
                                    </th>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-forms.create form-id="createLocationModal" form-name="Location" :route="route('admin.location.store')">
        <x-inputs.select label="Province Parent" name="province_id">
            <option value="-1" selected>None</option>
            <option value="-1">Ha Noi</option>
            <option value="-1">HCM</option>
        </x-inputs.select>
        <x-inputs.text label="Name" name="name"></x-inputs.text>
        <x-inputs.image-link label="Thumbnail" name="thumb"></x-inputs.image-link>
        <x-inputs.text-area label="Overview" name="overview"></x-inputs.text-area>
        <x-inputs.number label="Priority" name="priority"></x-inputs.number>
    </x-forms.create>

    @foreach($provinces as $province)
        <x-forms.update form-id="updateLocationModal{{$province->id}}" form-name="Province: {{$province->name}}"
                        :route="route('admin.location.province.update',['id'=>$province->id])">
            <x-inputs.text label="Name" name="name" :value="$province->name"></x-inputs.text>
            <x-inputs.image-link label="Thumbnail" name="thumb" :value="$province->thumb"></x-inputs.image-link>
            <x-inputs.text-area label="Overview" name="overview" :value="$province->overview"></x-inputs.text-area>
            <x-inputs.number label="Priority" name="priority" :value="$province->priority"></x-inputs.number>
        </x-forms.update>
    @endforeach
@endsection

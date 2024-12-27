<div class="form-group">
    <label for="input-{{$name}}">{{$label}}</label>
    <div class="input-group">
        <input readonly type="text" class="form-control ckfinder-input" name="{{ $name }}" id="input-{{ $name }}"
               required value="{{$value==""?old($name):$value}}">
        <span class="input-group-append">
            <button type="button" class="btn btn-secondary ckfinder-popup" id="button-popup-{{$name}}">
                Duyệt Ảnh
            </button>
        </span>
    </div>
    @error($name)
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

@push("scripts")
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let button_popup_{{$name}} = document.getElementById("button-popup-{{$name}}")
            button_popup_{{$name}}.onclick = async () => {
                CKFinder.popup({
                    chooseFiles: true,
                    width: 800,
                    height: 600,
                    onInit: function (finder) {
                        finder.on('files:choose', function (evt) {
                            let file = evt.data.files.first();
                            let fileUrl = file.getUrl();
                            try {
                                let url = new URL(fileUrl);
                                let value = url.pathname;
                            } catch (e) {
                                // Nếu không thể phân tích URL, giả sử giá trị là đường dẫn tương đối
                                let value = fileUrl;
                            }

                            // Nếu sử dụng biến trong khối try, khai báo bên ngoài
                            let valueFinal;
                            try {
                                let url = new URL(fileUrl);
                                valueFinal = url.pathname;
                            } catch (e) {
                                valueFinal = fileUrl;
                            }

                            let parentElement = button_popup_{{$name}}.closest(".input-group");
                            if (parentElement) {
                                let input = parentElement.querySelector(".ckfinder-input");
                                if (input) {
                                    input.value = valueFinal;
                                }
                            }
                        });

                        finder.on('file:choose:resizedImage', function (evt) {
                            // Nếu bạn cần xử lý hình ảnh được thay đổi kích thước
                        });
                    }
                });
            }
        });
    </script>
@endpush

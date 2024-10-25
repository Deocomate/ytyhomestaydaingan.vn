<div class="form-group">
    <label for="input-{{$name}}">{{$label}}</label>
    <div class="input-group">
        <input readonly type="text" class="form-control ckfinder-input" name="{{ $name }}" id="input-{{ $name }}"
               required value="{{$value==""?old($name):$value}}">
        <span class="input-group-append">
            <button type="button" class="btn btn-secondary ckfinder-popup" id="button-popup-{{$name}}">
                Search Image
            </button>
        </span>
    </div>
    @error($name)
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

@push("scripts")
    <script>
        let button_popup_{{$name}} = document.getElementById("button-popup-{{$name}}")
        button_popup_{{$name}}.onclick = async () => {
            CKFinder.popup({
                chooseFiles: true,
                width: 800,
                height: 600,
                onInit: function (finder) {
                    finder.on('files:choose', function (evt) {
                        let file = evt.data.files.first();
                        let value = file.getUrl();
                        let parentElement = button_popup_{{$name}}.closest(".input-group");
                        if (parentElement) {
                            let input = parentElement.querySelector(".ckfinder-input");
                            if (input) {
                                input.value = value;
                            }
                        }
                    });
                }
            });
        }
    </script>
@endpush

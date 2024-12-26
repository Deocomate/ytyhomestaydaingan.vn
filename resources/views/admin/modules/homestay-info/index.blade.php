@extends("admin.layouts.main")
@section("title","Thông tin Homestay")
@section("content")
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Thông tin Homestay</h3>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            <form action="{{route('admin.homestay-info.update',$homestayInfo->id)}}" method="POST">
                @method('PUT')
                @csrf
                <x-inputs.text label="Tên Homestay" name="name" :value="$homestayInfo->name"></x-inputs.text>
                <x-inputs.text label="Tiêu đề" name="title" :value="$homestayInfo->title"></x-inputs.text>
                <x-inputs.text-area label="Mô tả" name="description"
                                    :value="$homestayInfo->description"></x-inputs.text-area>
                <x-inputs.text label="Link Video" name="video_link" :value="$homestayInfo->video_link"></x-inputs.text>
                <x-inputs.text-area label="Thực đơn" name="food_menu"
                                    :value="$homestayInfo->food_menu"></x-inputs.text-area>
                <x-inputs.text label="Địa chỉ" name="address" :value="$homestayInfo->address"></x-inputs.text>
                <x-inputs.text label="Email liên hệ" name="contact_email"
                               :value="$homestayInfo->contact_email"></x-inputs.text>
                <x-inputs.text label="Số điện thoại liên hệ" name="contact_phone"
                               :value="$homestayInfo->contact_phone"></x-inputs.text>
                <x-inputs.text label="Hotline liên hệ" name="contact_hotline"
                               :value="$homestayInfo->contact_hotline"></x-inputs.text>
                <x-inputs.text label="Link Facebook" name="facebook_link"
                               :value="$homestayInfo->facebook_link"></x-inputs.text>
                <x-inputs.text label="Link Zalo" name="zalo_link" :value="$homestayInfo->zalo_link"></x-inputs.text>
                <x-inputs.text label="Link Map" name="map_link" :value="$homestayInfo->map_link"></x-inputs.text>

                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
        </div>
    </div>
@endsection
@push("scripts")
    <!-- Viết Javascript nếu cần -->
    <script>
    </script>
@endpush

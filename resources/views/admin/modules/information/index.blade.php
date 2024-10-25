@extends("admin.layouts.main")
@section('title','Website Information')
@section('content')
    <div class="row">
        <div class="col-12">
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
            @endif

            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h3 class="mb-0">Website Information</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.information.update') }}" method="post">
                        @csrf
                        @method('PUT')
                        <x-inputs.image-link label="Logo Link" name="logo_link"
                                             :value="$information->logo_link"></x-inputs.image-link>
                        <x-inputs.text label="Site Name" name="site_name"
                                       :value="$information->site_name"></x-inputs.text>
                        <x-inputs.text label="Email" name="email" :value="$information->email"></x-inputs.text>
                        <x-inputs.text label="Address" name="address" :value="$information->address"></x-inputs.text>
                        <x-inputs.text label="Phone Number" name="phone_number"
                                       :value="$information->phone_number"></x-inputs.text>
                        <x-inputs.text label="Phone Number 2" name="phone_number_2"
                                       :value="$information->phone_number_2"></x-inputs.text>
                        <x-inputs.text label="Zalo Number" name="zalo_number"
                                       :value="$information->zalo_number"></x-inputs.text>
                        <x-inputs.text label="Whatsapp Number" name="whatsapp_number"
                                       :value="$information->whatsapp_number"></x-inputs.text>
                        <x-inputs.text label="Hotline Number" name="hotline_number"
                                       :value="$information->hotline_number"></x-inputs.text>
                        <x-inputs.editor label="Introduce" name="introduce"
                                         :value="$information->introduce"></x-inputs.editor>
                        <x-inputs.text label="Google Map Link" name="google_map_link"
                                       :value="$information->google_map_link"></x-inputs.text>
                        <x-inputs.image-link label="SEO Thumbnail" name="seo_thumb"
                                             :value="$information->seo_thumb"></x-inputs.image-link>
                        <x-inputs.text label="SEO Title" name="seo_title"
                                       :value="$information->seo_title"></x-inputs.text>
                        <x-inputs.textarea label="SEO Description" name="seo_description"
                                           :value="$information->seo_description"></x-inputs.textarea>
                        <x-inputs.editor label="Tour Include Exclude" name="tour_include_exclude"
                                         :value="$information->tour_include_exclude"></x-inputs.editor>
                        <x-inputs.editor label="Tour Policy" name="tour_policy"
                                         :value="$information->tour_policy"></x-inputs.editor>
                        <input class="btn btn-warning" type="submit" value="Update Information">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

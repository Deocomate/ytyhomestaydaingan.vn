<?php /**
 * @var \App\Models\TourProvider $tourProviders
 * @var \App\Models\TourProvider $tourProvider
 */ ?>
@extends("admin.layouts.main")
@section('title','Tour Provider List')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h3 class="mb-0">Tour Provider List</h3>
                    <x-forms.button type="create" form-id="createTourProviderModal"></x-forms.button>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-bordered table-hover">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Provider Name</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Phone - Hotline</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tourProviders as $tourProvider)
                                <tr>
                                    <th>{{$tourProvider->name}}</th>
                                    <th>{{$tourProvider->address}}</th>
                                    <th>{{$tourProvider->email}}</th>
                                    <th>{{$tourProvider->phone_number}} - {{$tourProvider->hotline}}</th>
                                    <th>
                                        <x-forms.button type="update"
                                                        form-id="updateTourProviderModal{{$tourProvider->id}}">
                                        </x-forms.button>
                                        <a href="{{route('admin.location.province.delete',['id'=>$tourProvider->id])}}"
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

    <x-forms.create form-id="createTourProviderModal" form-name="Tour Provider" :route="route('admin.provider.store')">
        <x-inputs.text label="Name" name="name"></x-inputs.text>
        <x-inputs.image-link label="Thumbnail" name="thumb"></x-inputs.image-link>
        <x-inputs.text label="Phone number" name="phone_number"></x-inputs.text>
        <x-inputs.text label="Hotline" name="hotline"></x-inputs.text>
        <x-inputs.email label="Email" name="email"></x-inputs.email>
        <x-inputs.text label="Address" name="address"></x-inputs.text>
        <x-inputs.text label="Facebook" name="facebook"></x-inputs.text>
        <x-inputs.text label="Zalo" name="zalo"></x-inputs.text>
        <x-inputs.text label="Website" name="website"></x-inputs.text>
    </x-forms.create>

    @foreach($tourProviders as $tourProvider)
        <x-forms.update form-id="updateTourProviderModal{{$tourProvider->id}}"
                        form-name="Tour Provider: {{$tourProvider->name}}"
                        :route="route('admin.provider.update',['id'=>$tourProvider->id])">
            <x-inputs.text label="Name" name="name" :value="$tourProvider->name"></x-inputs.text>
            <x-inputs.image-link label="Thumbnail" name="thumb" :value="$tourProvider->thumb"></x-inputs.image-link>
            <x-inputs.text label="Phone number" name="phone_number"
                           :value="$tourProvider->phone_number"></x-inputs.text>
            <x-inputs.text label="Hotline" name="hotline" :value="$tourProvider->hotline"></x-inputs.text>
            <x-inputs.email label="Email" name="email" :value="$tourProvider->email"></x-inputs.email>
            <x-inputs.text label="Address" name="address" :value="$tourProvider->address"></x-inputs.text>
            <x-inputs.text label="Facebook" name="facebook" :value="$tourProvider->facebook"></x-inputs.text>
            <x-inputs.text label="Zalo" name="zalo" :value="$tourProvider->zalo"></x-inputs.text>
            <x-inputs.text label="Website" name="website" :value="$tourProvider->website"></x-inputs.text>
        </x-forms.update>
    @endforeach
@endsection

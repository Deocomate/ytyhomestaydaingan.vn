<?php /**
 * @var \App\Models\Tour $tours
 * @var \App\Models\Tour $tour
 * * @var \App\Models\TourProvider $tourProviders
 * * @var \App\Models\TourProvider $tourProvider
 */ ?>
@extends("admin.layouts.main")
@section('title','Create Tour')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h3 class="mb-0">Create Tour</h3>
                    <a href="{{route('admin.tour')}}" class="btn btn-info">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.tour.store')}}" method="post">
                        @csrf
                        <x-inputs.text label="Tour Name" name="name"></x-inputs.text>
                        <x-inputs.text label="Duration" name="duration"></x-inputs.text>
                        <x-inputs.editor label="Overview" name="overview"></x-inputs.editor>
                        <x-inputs.editor label="Itinerary" name="itinerary"></x-inputs.editor>
                        <x-inputs.image-link label="Thumbnail"
                                             name="thumb"></x-inputs.image-link>
                        <x-inputs.number label="Priority" name="priority"></x-inputs.number>
                        <x-inputs.number label="Dealer Price" name="dealer_price"></x-inputs.number>
                        <x-inputs.number label="Retail Price" name="retail_price"></x-inputs.number>
                        <x-inputs.select label="Tour Provider" name="tour_provider_id">
                            @foreach($tourProviders as $tourProvider)
                                <option value="{{$tourProvider->id}}">{{$tourProvider->name}}</option>
                            @endforeach
                        </x-inputs.select>
                        <input class="btn btn-success" type="submit" value="Create Tour">
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--    <x-forms.create form-id="createTourProviderModal" form-name="Tour Provider" :route="route('admin.provider.store')">--}}
    {{--        <x-inputs.text label="Name" name="name"></x-inputs.text>--}}
    {{--        <x-inputs.image-link label="Thumbnail" name="thumb"></x-inputs.image-link>--}}
    {{--        <x-inputs.text label="Phone number" name="phone_number"></x-inputs.text>--}}
    {{--        <x-inputs.text label="Hotline" name="hotline"></x-inputs.text>--}}
    {{--        <x-inputs.email label="Email" name="email"></x-inputs.email>--}}
    {{--        <x-inputs.text label="Address" name="address"></x-inputs.text>--}}
    {{--        <x-inputs.text label="Facebook" name="facebook"></x-inputs.text>--}}
    {{--        <x-inputs.text label="Zalo" name="zalo"></x-inputs.text>--}}
    {{--        <x-inputs.text label="Website" name="website"></x-inputs.text>--}}
    {{--    </x-forms.create>--}}

    {{--    @foreach($tourProviders as $tourProvider)--}}
    {{--        <x-forms.update form-id="updateTourProviderModal{{$tourProvider->id}}"--}}
    {{--                        form-name="Tour Provider: {{$tourProvider->name}}"--}}
    {{--                        :route="route('admin.provider.update',['id'=>$tourProvider->id])">--}}
    {{--            <x-inputs.text label="Name" name="name" :value="$tourProvider->name"></x-inputs.text>--}}
    {{--            <x-inputs.image-link label="Thumbnail" name="thumb" :value="$tourProvider->thumb"></x-inputs.image-link>--}}
    {{--            <x-inputs.text label="Phone number" name="phone_number"--}}
    {{--                           :value="$tourProvider->phone_number"></x-inputs.text>--}}
    {{--            <x-inputs.text label="Hotline" name="hotline" :value="$tourProvider->hotline"></x-inputs.text>--}}
    {{--            <x-inputs.email label="Email" name="email" :value="$tourProvider->email"></x-inputs.email>--}}
    {{--            <x-inputs.text label="Address" name="address" :value="$tourProvider->address"></x-inputs.text>--}}
    {{--            <x-inputs.text label="Facebook" name="facebook" :value="$tourProvider->facebook"></x-inputs.text>--}}
    {{--            <x-inputs.text label="Zalo" name="zalo" :value="$tourProvider->zalo"></x-inputs.text>--}}
    {{--            <x-inputs.text label="Website" name="website" :value="$tourProvider->website"></x-inputs.text>--}}
    {{--        </x-forms.update>--}}
    {{--    @endforeach--}}
@endsection

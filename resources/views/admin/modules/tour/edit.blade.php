<?php /**
 * @var \App\Models\Tour $tour
 * @var \App\Models\TourProvider $tourProviders
 * @var \App\Models\TourProvider $tourProvider
 * @var \App\Models\Province $provinces
 * @var \App\Models\Province $province
 * @var \App\Models\District $district
 */ ?>
@extends("admin.layouts.main")
@section('title','Edit Tour')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h3 class="mb-0">Edit Tour</h3>
                    <a href="{{route('admin.tour')}}" class="btn btn-info">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.tour.update',['id'=>$tour->id])}}" method="post">
                        @csrf
                        <x-inputs.text label="Tour Name" name="name" :value="$tour->name"></x-inputs.text>
                        <x-inputs.text label="Duration" name="duration" :value="$tour->duration"></x-inputs.text>
                        <x-inputs.editor label="Overview" name="overview" :value="$tour->overview"></x-inputs.editor>
                        <x-inputs.editor label="Itinerary" name="itinerary" :value="$tour->itinerary"></x-inputs.editor>
                        <x-inputs.image-link label="Thumbnail"
                                             name="thumb" :value="$tour->thumb"></x-inputs.image-link>
                        <x-inputs.number label="Priority" name="priority" :value="$tour->priority"></x-inputs.number>
                        <x-inputs.number label="Dealer Price" name="dealer_price"
                                         :value="$tour->dealer_price"></x-inputs.number>
                        <x-inputs.number label="Retail Price" name="retail_price"
                                         :value="$tour->retail_price"></x-inputs.number>
                        <x-inputs.select label="Tour Provider" name="tour_provider_id">
                            @foreach($tourProviders as $tourProvider)
                                <option
                                        value="{{$tourProvider->id}}" @selected($tour->tourProvider->id == $tourProvider->id)>{{$tourProvider->name}}</option>
                            @endforeach
                        </x-inputs.select>

                        <x-inputs.select-multiple label="Tour Locations" name="districts" multiple>
                            @foreach($tour->districts as $district)
                                <option selected value="{{$district->id}}">{{$district->province->name}}
                                    - {{$district->name}}</option>
                            @endforeach
                            @foreach($provinces as $province)
                                @foreach($province->districts as $district)
                                    <option value="{{$district->id}}">{{$province->name}} - {{$district->name}}</option>
                                @endforeach
                            @endforeach
                        </x-inputs.select-multiple>
                        {{-- {{dd($tour->districts())}} --}}

                        <input class="btn btn-warning" type="submit" value="Update Tour">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

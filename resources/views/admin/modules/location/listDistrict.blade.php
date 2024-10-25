<?php /**
 * @var \App\Models\Province $province
 * @var \App\Models\Province $provinces
 * @var \App\Models\District $district
 * @var \App\Models\District $districts
 */ ?>
@extends("admin.layouts.main")
@section('title','District List')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h3 class="mb-0">District List of {{$province->name}}</h3>
                    <x-forms.button type="create" form-id="createDistrictModal"></x-forms.button>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-bordered table-hover">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>District Name</th>
                                <th>Priority</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($districts as $district)
                                <tr>
                                    <th>{{$district->name}}</th>
                                    <th>{{$district->priority}}</th>
                                    <th>
                                        <x-forms.button type="update"
                                                        form-id="updateDistrictModal{{$district->id}}">
                                        </x-forms.button>
                                        <a href="{{route('admin.location.district.delete',['id'=>$district->id])}}"
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

    <x-forms.create form-id="createDistrictModal" form-name="Location" :route="route('admin.location.store')">
        <input type="hidden" name="province_id" value="{{$province->id}}">
        <x-inputs.text label="Name" name="name"></x-inputs.text>
        <x-inputs.image-link label="Thumbnail" name="thumb"></x-inputs.image-link>
        <x-inputs.text-area label="Overview" name="overview"></x-inputs.text-area>
        <x-inputs.number label="Priority" name="priority"></x-inputs.number>
    </x-forms.create>

    @foreach($districts as $district)
        <x-forms.update form-id="updateDistrictModal{{$district->id}}" form-name="District: {{$district->name}}"
                        :route="route('admin.location.district.update',['id'=>$district->id])">
            <input type="hidden" name="province_id" value="{{$province->id}}">
            <x-inputs.text label="Name" name="name" :value="$district->name"></x-inputs.text>
            <x-inputs.image-link label="Thumbnail" name="thumb" :value="$district->thumb"></x-inputs.image-link>
            <x-inputs.text-area label="Overview" name="overview" :value="$district->overview"></x-inputs.text-area>
            <x-inputs.number label="Priority" name="priority" :value="$district->priority"></x-inputs.number>
        </x-forms.update>
    @endforeach
@endsection

<?php /**
 * @var \App\Models\Tour $tour
 * @var \App\Models\TourImage $tourImage
 */ ?>
@extends("admin.layouts.main")
@section('title','Tour Image List')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h3 class="mb-0">Tour Image List</h3>
                    <div>
                        <a href="{{route('admin.tour')}}" class="btn btn-info">Back</a>
                        <x-forms.button type="create" form-id="createTourImageModal"></x-forms.button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tour->tourImages as $tourImage)
                            <tr>
                                <td>
                                    <img width="400px" src="{{$tourImage->link}}" alt="">
                                </td>
                                <td>
                                    <a class="btn btn-danger"
                                       href="{{route('admin.tour_image.delete',['id'=>$tourImage->id])}}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <x-forms.create form-id="createTourImageModal" form-name="Tour Image"
                    :route="route('admin.tour_image.insert',['tourId'=>$tour->id])">
        <x-inputs.image-link label="Image" name="link"></x-inputs.image-link>
    </x-forms.create>
@endsection

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Models\TourImage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TourImageController extends Controller
{
    public function index($tourId)
    {
        $tour = Tour::find($tourId);
        return view('admin.tour.image.index', compact('tour'));
    }

    public function insert($tourId, Request $request)
    {
        $request->validate([
            'link' => 'required'
        ]);
        TourImage::insert([
            'link' => $request->input('link'),
            'tour_id' => $tourId
        ]);
        return to_route('admin.tour_image', ['tourId' => $tourId]);
    }

    /**
     * @var TourImage $tourImage
     */
    public function delete($id)
    {
        $tourImage = TourImage::find($id);
        TourImage::where('id', $id)->delete();
        return to_route('admin.tour_image', ['tourId' => $tourImage->tour->id]);
    }
}

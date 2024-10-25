<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Province;
use App\Models\Tour;
use App\Models\TourProvider;
use Illuminate\Http\Request;
use Random\RandomException;
use Str;

class TourController extends Controller
{

    public function index()
    {
        $tours = Tour::all();
        return view('admin.tour.index', compact('tours'));
    }

    public function create()
    {
        $tourProviders = TourProvider::all();
        return view('admin.tour.create', compact(['tourProviders']));
    }


    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "duration" => "required",
            "overview" => "required",
            "itinerary" => "required",
            "thumb" => "required",
            "priority" => "required",
            "dealer_price" => "required",
            "retail_price" => "required",
            "tour_provider_id" => "required"
        ]);
        $name = $request->input("name") . " " . rand(1, 10000);
        $request->request->add([
            "slug" => Str::slug($name, "-"),
        ]);
        $tourInsert = Tour::insert($request->except("_token"));
        return to_route("admin.tour");
    }

    public function edit($id)
    {
        $tour = Tour::findOrFail($id);
        $tourProviders = TourProvider::all();
        $provinces = Province::all();
        return view('admin.tour.edit', compact(['tour', 'tourProviders', 'provinces']));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            "name" => "required",
            "duration" => "required",
            "overview" => "required",
            "itinerary" => "required",
            "thumb" => "required",
            "priority" => "required",
            "dealer_price" => "required",
            "retail_price" => "required",
            "tour_provider_id" => "required"
        ]);
        $name = $request->input("name") . " " . rand(1, 10000);
        $request->request->add([
            "slug" => Str::slug($name, "-"),
        ]);
        $tourUpdate = Tour::where('id', $id)->update($request->except(["_token", "districts"]));

        $tour = Tour::find($id);

        $tour->districts()->sync($request->input('districts'));

        return to_route("admin.tour");
    }

    public function delete($id)
    {
        $tourDelete = Tour::where('id', $id)->delete();
        return to_route("admin.tour");
    }
}

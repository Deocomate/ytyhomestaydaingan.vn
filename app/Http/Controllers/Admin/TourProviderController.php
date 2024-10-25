<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TourProvider;
use Illuminate\Http\Request;

class TourProviderController extends Controller
{
    public function index()
    {
        $tourProviders = TourProvider::all();
        return view('admin.provider.index', compact(['tourProviders']));
    }

    public function store(Request $request)
    {
        $request->validate([ // app\Http\Controllers\Admin\TourProviderController.php:19
            "_token" => "required",
            "name" => "required",
            "thumb" => "required",
            "phone_number" => "required",
            "hotline" => "required",
            "email" => "required",
            "address" => "required",
            "facebook" => "required",
            "zalo" => "required",
            "website" => "required",
        ]);
        $tourProviderInsert = TourProvider::insert($request->except('_token'));
        return to_route("admin.provider");
    }

    public function update($id, Request $request)
    {
        $request->validate([ // app\Http\Controllers\Admin\TourProviderController.php:19
            "_token" => "required",
            "name" => "required",
            "thumb" => "required",
            "phone_number" => "required",
            "hotline" => "required",
            "email" => "required",
            "address" => "required",
            "facebook" => "required",
            "zalo" => "required",
            "website" => "required",
        ]);
        $tourProviderUpdate = TourProvider::where('id', $id)->update($request->except('_token'));
        return to_route("admin.provider");
    }

    public function delete($id)
    {
        $tourProviderDelete = TourProvider::where('id', $id)->delete();
        return to_route("admin.provider");
    }
}

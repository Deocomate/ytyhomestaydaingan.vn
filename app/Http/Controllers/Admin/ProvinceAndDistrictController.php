<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceAndDistrictController extends Controller
{
    public function listAllProvinceAndDistrict()
    {
        $provinces = Province::orderByDesc('priority')->get();
        return view('admin.location.index', compact(['provinces']));
    }

    public function store(Request $request)
    {
        // Validate Data
        $request->validate([
            "province_id" => "required",
            "name" => "required",
            "thumb" => "required",
            "overview" => "required",
            "priority" => "required",
        ]);

        // Insert Data To Database
        if ($request->input("province_id") == -1) {
            Province::insert($request->except(["_token", "province_id"]));
        } else {
            District::insert($request->except(["_token"]));
            return to_route('admin.location.listDistrict', ['id' => $request->input("province_id")]);
        }

        return to_route('admin.location');
    }

    public function deleteProvince($id)
    {
        District::where('province_id', $id)->delete();
        Province::where('id', $id)->delete();
        return to_route('admin.location');
    }

    public function updateProvince($id, Request $request)
    {
        $request->validate([
            "name" => "required",
            "thumb" => "required",
            "overview" => "required",
            "priority" => "required",
        ]);

        Province::where('id', $id)->update($request->except(['_token']));

        return to_route('admin.location');
    }

    public function listDistrict($id)
    {
        $province = Province::where('id', $id)->first();
        $districts = District::where('province_id', $id)->get();
        return view('admin.location.listDistrict', compact(['province', 'districts']));
    }

    public function updateDistrict($id, Request $request)
    {
        $request->validate([
            "name" => "required",
            "thumb" => "required",
            "overview" => "required",
            "priority" => "required",
            "province_id" => "required"
        ]);

        District::where('id', $id)->update($request->except(['_token']));

        return to_route('admin.location.listDistrict', ['id' => $request->input('province_id')]);
    }

    public function deleteDistrict($id)
    {
        $provinceId = District::find($id)->province_id;
        District::where('id', $id)->delete();
        return to_route('admin.location.listDistrict', ['id' => $provinceId]);
    }
}

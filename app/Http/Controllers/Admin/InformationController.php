<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InformationController extends Controller
{
    public function index()
    {
        // Lấy về bản ghi duy nhất trong bảng information
        $information = Information::first();

        // Nếu không có bản ghi nào, chèn 1 bản ghi với các trường là chuỗi rỗng
        if (!$information) {
            Information::insert([
                'logo_link' => '',
                'site_name' => '',
                'email' => '',
                'address' => '',
                'phone_number' => '',
                'phone_number_2' => '',
                'zalo_number' => '',
                'whatsapp_number' => '',
                'hotline_number' => '',
                'introduce' => '',
                'google_map_link' => '',
                'seo_thumb' => '',
                'seo_title' => '',
                'seo_description' => '',
                'tour_include_exclude' => '',
                'tour_policy' => '',
            ]);

            // Lấy dữ liệu từ bản ghi vừa chèn vào
            $information = Information::first();
        }

        // dd($information);
        // Trả về view và dữ liệu từ bản ghi duy nhất đó
        return view('admin.information.index', compact('information'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'logo_link' => 'required|url',
            'site_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'phone_number_2' => 'required|string|max:255',
            'zalo_number' => 'required|string|max:255',
            'whatsapp_number' => 'required|string|max:255',
            'hotline_number' => 'required|string|max:255',
            'introduce' => 'required|string',
            'google_map_link' => 'required',
            'seo_thumb' => 'required',
            'seo_title' => 'required|string|max:255',
            'seo_description' => 'required|string',
            'tour_include_exclude' => 'required|string',
            'tour_policy' => 'required|string',
        ]);

        $information = DB::table('information')->update($request->except(['_token', '_method']));

        return to_route("admin.information")->with('success', 'Thông tin đã được cập nhật!');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.modules.home.index');
    }

    public function test_form()
    {
        return view('admin.test.form');
    }

    public function test_form_post(Request $request)
    {
        $validator = $request->validate([
            "text" => "required",
            "email" => "required",
            "number" => "required",
            "text-area" => "required",
            "select-simple" => "required",
            "select-2" => "required",
            "select-multiple" => "required",
            "date" => "required",
            "time" => "required",
            "editor" => "required",
            "Image" => "required",
        ]);

        return view('admin.test.form');
    }
}

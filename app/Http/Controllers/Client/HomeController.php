<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function trang_chu()
    {
        return view("client.modules.trang_chu.index");
    }
}

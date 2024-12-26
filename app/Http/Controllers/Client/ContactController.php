<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function lien_he()
    {
        $homestayInfo = \DB::table("homestay_info")->first();
        Debugbar::info($homestayInfo);
        return view("client.modules.lien_he.index");
    }
}

<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Ramsey\Uuid\Exception\UnableToBuildUuidException;

class TestController extends Controller
{
    public function componentList()
    {
        return view('components.test.index');
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
    }

    public function boot(): void
    {
        $homestayInfo = \DB::table("homestay_info")->get()->first();
        \View::share("homestayInfo", $homestayInfo);
    }
}

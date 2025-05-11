<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
    }

    public function boot(): void
    {
        if (Schema::hasTable("homestay_info")) {
            $homestayInfo = \DB::table("homestay_info")->get()->first();
            \View::share("homestayInfo", $homestayInfo);
        }

    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table("users")->insert([
            "name" => "admin",
            "email" => "admin@gmail.com",
            "password" => bcrypt("admin"),
        ]);
        $this->call([
            HomestaySeeder::class,
        ]);
    }
}

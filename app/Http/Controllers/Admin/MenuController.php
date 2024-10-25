<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function index()
    {
        $menus = DB::table("menus")->orderByDesc('priority')->get();
        return view("admin.modules.menu.index", compact(['menus']));
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            "name" => "required|string|max:1000",
            "url" => "required|string|url|max:1000",
            "parent_id" => "required|integer|max:10000",
            "priority" => "required|integer|max:10000",
        ]);

        if ($request->input("parent_id") == 0) {
            $validation['parent_id'] = null;
        }

        DB::table('menus')->insert($validation);

        return to_route("admin.menu");
    }

    public function update(Request $request)
    {
        $menuUpdated = DB::table("menus")->upsert($request->input("menuData"), ['id'], ['parent_id', 'priority']);
        return $menuUpdated;
    }

    public function updateOne(Request $request, $id)
    {
        $validated = $request->validate([
            "name-edit" => "required|string|max:1000",
            "url-edit" => "required|string|url|max:1000",
        ]);
        DB::table("menus")->where("id", $id)->update([
            "name" => $request->input("name-edit"),
            "url" => $request->input("url-edit"),
        ]);
        return to_route("admin.menu");
    }

    public function delete($id)
    {
        DB::table('menus')->where('id', $id)->delete();
        return to_route("admin.menu");
    }
}

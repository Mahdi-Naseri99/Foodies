<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();

        if (request('search')) {
            // get ma btezbat 3a collection !! bas 3a model
            $menus = Menu::query()->where('name', 'like', '%' . request('search') . '%')
                                  ->orWhere('description', 'like', '%' . request('search') . '%')->get();

            return view('menus.index', [
                'menus'=>$menus
            ]);
        }

        return view('menus.index', compact('menus'));
    }
}

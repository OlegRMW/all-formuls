<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Favorites;

class FavoritesController extends Controller
{
    public function store(Request $request)
    {
        $favorite = new Favorites;
        $favorite-> user_id = session('user_id');
        $favorite-> formul_id = $request->id;
        $favorite-> save();
    }
}
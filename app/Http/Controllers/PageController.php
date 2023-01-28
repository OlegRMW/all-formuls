<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Formul;

	

class PageController extends Controller
{
    public function all(){
        $cards = Formul::simplePaginate(3);
        return view('pages.formulas',compact('cards'));
    }
    public function index(){
        return view('pages.index');
    }
    public function favorites(){
        $user = User::where('id', session('user_id'))->get();
        return view('pages.favorites', compact('user'));   
    }
    public function show($id){
        $card = Formul::findorFail($id);
        return view('pages.show',compact('card'));
    }
    public function reg(){
        return view('pages.register');
    }
    public function auth(){
        return view('pages.auth');
    }
    public function insert(){
        $formul = new Formul;
        $formul->id = str_shuffle('123456');
        $formul->name = "Формула";
        $formul->content = "some content";
        $formul->image = "pifagor.png";
        $formul->save();
    }
    
}

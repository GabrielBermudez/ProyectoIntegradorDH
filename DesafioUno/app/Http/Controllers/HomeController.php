<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MovieModel;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function PeliculasRandom(){
        $peliculasRandom = MovieModel::orderByRaw('rand()')->take(5)->get();
       

        $peliculasRecientes = MovieModel::take(5)
        ->orderBy('id', 'DESC')
        ->get();

        return view("home",compact("peliculasRandom","peliculasRecientes"));
    }
}

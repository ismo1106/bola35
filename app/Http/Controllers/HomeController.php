<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\home;
use App\masterliga;
use App\masterteam;



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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home = home::all();
        $masterliga = masterliga::all();
        $masterteam = masterteam::all();

        return view('home', [ 'home' => $home , 'masterliga' => $masterliga , 'masterteam' => $masterteam ]);
    }

    public function play_game()
    {
        return view('play_game');
    }
}

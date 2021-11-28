<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

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

    public function home()
    {
        $datas = Place::orderBy('created_at', 'desc')->where('confirmed', true)->limit(3)->get();
        $first = $datas[0];
        $other1 = $datas[1];
        $other2 = $datas[2];

        return view('front-office.index',
            [
                'first'=>$first,
                'other1'=>$other1,
                'other2'=>$other2,
            ]
        );
    }
}

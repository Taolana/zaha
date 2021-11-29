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
        if(!empty($datas->toArray())){
            if(array_key_exists(0,$datas->toArray())){
                $first = $datas[0];
            }
            if(array_key_exists(1,$datas->toArray())){
                $other1 = $datas[1];
            }
            if(array_key_exists(2,$datas->toArray())){
                $other2 = $datas[2];
            }
        }

        return view('front-office.index',
            [
                'first'=>$first = null,
                'other1'=>$other1 = null,
                'other2'=>$other2 = null,
            ]
        );
    }
}

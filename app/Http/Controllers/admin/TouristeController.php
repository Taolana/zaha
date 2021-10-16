<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Touriste;
use Illuminate\Http\Request;

class TouristeController extends Controller
{
    public function index(){
        $datas = Touriste::all();

        return view('back-office.pages.users.touristes.lists', compact('datas'));
    }
}

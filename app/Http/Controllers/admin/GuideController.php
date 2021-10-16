<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Models\Guide;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    public function index()
    {
        $datas = Guide::all();

        return view('back-office.pages.users.guides.lists', compact('datas'));
    }
}

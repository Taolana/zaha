<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Touriste;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

/**
 * Class TouristeController
 * @package App\Http\Controllers\admin
 */
class TouristeController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(){
        $datas = Touriste::all();

        return view('back-office.pages.users.touristes.lists', compact('datas'));
    }
}

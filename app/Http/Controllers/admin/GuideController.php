<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Models\Guide;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

/**
 * Class GuideController
 * @package App\Http\Controllers\admin
 */
class GuideController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $datas = Guide::all();

        return view('back-office.pages.users.guides.lists', compact('datas'));
    }
}

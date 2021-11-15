<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Class PlaceController
 * @package App\Http\Controllers\admin
 */
class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $datas = Place::where('confirmed', false)->get();

        return view('back-office.pages.places.index', [
            'datas' => $datas,
            'approuved' => false,
            'declined' => false
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function listApprouvedPlace()
    {
        $datas = Place::where('confirmed', true)->get();

        return view('back-office.pages.places.index', [
            'datas' => $datas,
            'approuved' => true,
            'declined' => false
        ]);
    }

    public function listDeclinedPlace()
    {
        $datas = Place::where('declined', true)->get();

        return view('back-office.pages.places.index', [
            'datas' => $datas,
            'approuved' => false,
            'declined' => true
        ]);
    }
    /**
     * @param $idPlace
     * @param $idApprouver
     * @return RedirectResponse
     */
    public function approuvePlace($idPlace, $idApprouver)
    {
        $place = Place::find($idPlace)->first();
        $place->admin_id($idApprouver);
        try {
            $place->update();

            return redirect()->route('admin.places.index');
        }catch (\Throwable $th){
            die();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return void
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return void
     */
    public function destroy($id)
    {
        //
    }
}

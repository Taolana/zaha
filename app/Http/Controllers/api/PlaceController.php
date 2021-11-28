<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlacesStoreRequest;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front-office.pages.places');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        dd(Auth::guard('guide')->user());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = \Illuminate\Support\Facades\Auth::guard('guide')->user()->id;

        $rules =  [
            'name' => ['required'],
            'type' => ['required'],
            'history' => ['required'],
            'accessibility' => ['required'],
            'fokontany_id' => ['required'],
        ];
        $request->validate($rules, $request->all());
        $request->request->add(['guide_id' => $user_id]);
//        if ($request->hasFile('image_one')){
//            $image = $request->file('image_one');
//            $ext = $image->extension();
//            $file = time().'.'.$ext;
//            $image->storeAs('public/places', $file);
//            $request->request->add(['one_image_name' => $file]);
//        }
//        dd($request->all());
        try {
            $place = Place::create($request->all());
        } catch (\Throwable $th) {
            return response()->json($th);
        }

        return response()->json([
            'status' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

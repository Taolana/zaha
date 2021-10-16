<?php

namespace App\Http\Controllers\api;

use App\Models\Region;
use App\Models\Commune;
use App\Models\District;
use App\Models\Province;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlacesDataController extends Controller
{
    public function provinces()
    {
        $provinces = Province::all();

        return response()->json($provinces);
    }

    public function regions($region_id)
    {
        $regions = Province::find($region_id)->regions;

        return response()->json($regions);
    }

    public function districts($region_id)
    {
        $districts = Region::find($region_id)->districts;

        return response()->json($districts);
    }

    public function communes($district_id)
    {
        $communes = District::find($district_id)->communes;

        return response()->json($communes);
    }

    public function getFokontany($commune_id)
    {
        $fokontany = Commune::find($commune_id)->fokontany;

        return response()->json($fokontany);
    }

//    public function getUserConnected()
//    {
//        $user_id = Auth::guard('auth:guide')->user()->id;
//
//        return response()->json($user_id);
//    }
}

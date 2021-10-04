<?php

namespace App\Models;

use App\Models\Region;
use App\Models\Commune;
use App\Models\District;
use App\Models\Province;
use App\Models\Fokontany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Place extends Model
{
    use HasFactory;
    
    public function fokontany()
    {
        return $this->belongsTo(Fokontany::class, 'fokontany_id');
    }

    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}

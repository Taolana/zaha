<?php

namespace App\Models;

use App\Models\District;
use App\Models\Fokontany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commune extends Model
{
    use HasFactory;

    
    public function fokontany()
    {
        return $this->hasMany(Fokontany::class, 'commune_id', 'id');
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }
}

<?php

namespace App\Models;

use App\Models\Place;
use App\Models\Commune;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fokontany extends Model
{
    use HasFactory;

    protected $table = "fokontany";

    protected $fillable = [
        'name',
        'fokontany_id',
        'moderateur_id',
        'guide_id',
        'type',
        'history',
        'accessibility',
        'confirmed'
    ];

    
    public function places()
    {
        return $this->hasMany(Place::class);
    }

    
    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }
}

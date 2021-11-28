<?php

namespace App\Models;

use App\Models\Guide;
use App\Models\Region;
use App\Models\Commune;
use App\Models\District;
use App\Models\Province;
use App\Models\Fokontany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Place
 * @package App\Models
 * @method static where(string $string, bool $false)
 */
class Place extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'name' ,
        'type' ,
        'history' ,
        'accessibility' ,
        'guide_id',
        'fokontany_id' ,
        'admin_id',
        'moderator_id',
        'one_image_name',
        'one_image_path'
    ];

    /**
     * @return BelongsTo Relation Place Belongs To Fokontany
     */
    public function fokontany()
    {
        return $this->belongsTo(Fokontany::class, 'fokontany_id');
    }

    /**
     * @return BelongsTo
     */
    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }

    /**
     * @return BelongsTo
     */
    public function district()
    {
        return $this->belongsTo(District::class);
    }

    /**
     * @return BelongsTo
     */
    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    /**
     * @return BelongsTo
     */
    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    /**
     * @return BelongsTo
     */
    public function guide()
    {
        return $this->belongsTo(Guide::class);
    }
}

<?php

namespace App\Models;

use App\Models\Region;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Province
 * @package App\Models
 */
class Province extends Model
{
    use HasFactory;

    /**
     * Get all of the regions for the Province
     *
     * @return HasMany
     */
    public function regions()
    {
        return $this->hasMany(Region::class);
    }
}

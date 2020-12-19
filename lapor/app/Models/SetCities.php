<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SetCities extends Model
{
    use HasFactory;
    use SoftDeletes;

    // relation table
    public function provinces()
    {
        return $this->hasOne('App\Models\SetProvinces', 'provinces_id');
    }

    public function lapor()
    {
        return $this->belongsTo('App\Models\Lapor', 'location_id')->withDefault();
    }
}

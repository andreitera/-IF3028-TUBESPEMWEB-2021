<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SetCities extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table    ="set_cities";
    protected $dates 	= ['deleted_at'];

    // relation table
    public function provinces()
    {
        return $this->belongsTo('App\Models\SetProvinces', 'province_id')->withDefault();
    }
}

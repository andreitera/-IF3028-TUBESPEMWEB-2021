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
        return $this->hasMany('App\Models\SetProvinces', 'provinces_id');
    }

    public function lapor()
    {
        return $this->belongsTo('App\Models\Lapor', 'location_id')->withDefault();
    }
}

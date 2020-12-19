<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SetProvinces extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table    ="set_provinces";
    protected $dates 	= ['deleted_at'];

    // relation table
    public function cities()
    {
        return $this->belongsTo('App\Models\SetCities', 'province_id')->withDefault();
    }

    public function lapor()
    {
        return $this->belongsTo('App\Models\Lapor', 'instansi_tujuan_id')->withDefault();
    }
}

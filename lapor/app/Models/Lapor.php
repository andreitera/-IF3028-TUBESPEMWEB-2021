<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lapor extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table    ="lapor";
    protected $dates 	= ['deleted_at'];

    // relation table
    public function users()
    {
        return $this->hasMany('App\Models\Users', 'user_id');
    }

    public function laporanType()
    {
        return $this->hasMany('App\Models\SetLibraries', 'laporan_type_id');
    }

    public function locationId()
    {
        return $this->hasMany('App\Models\SetCities', 'location_id');
    }

    public function instansiTujuan()
    {
        return $this->hasMany('App\Models\SetProvinces', 'instansi_tujuan_id');
    }

    public function category()
    {
        return $this->hasMany('App\Models\SetLibraries', 'category_id');
    }

    public function laporId()
    {
        return $this->hasMany('App\Models\SetLibraries', 'lapor_id');
    }

    public function status()
    {
        return $this->hasMany('App\Models\SetLibraries', 'status_id');
    }
}

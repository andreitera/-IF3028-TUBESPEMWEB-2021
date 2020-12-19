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
        return $this->belongsTo('App\Models\Users', 'user_id')->withDefault();
    }

    public function libraries_laporan_type_id()
    {
        return $this->belongsTo('App\Models\SetLibraries', 'laporan_type_id')->withDefault();
    }

    public function cities()
    {
        return $this->belongsTo('App\Models\SetCities', 'location_id')->withDefault();
    }

    public function provinces()
    {
        return $this->belongsTo('App\Models\SetProvinces', 'instansi_tujuan_id')->withDefault();
    }

    public function libraries_category_id()
    {
        return $this->belongsTo('App\Models\SetLibraries', 'category_id')->withDefault();
    }

    public function libraries_status_id()
    {
        return $this->belongsTo('App\Models\SetLibraries', 'status_id')->withDefault();
    }

    public function comment()
    {
        return $this->hasMany('App\Models\Comment', 'lapor_id');
    }
}

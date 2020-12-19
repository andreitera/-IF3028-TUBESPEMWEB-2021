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
        return $this->hasMany('App\Models\SetCities', 'provinces_id');
    }

    public function lapor()
    {
        return $this->hasMany('App\Models\Lapor', 'instansi_tujuan_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SetLibraries extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table    ="set_libraries";
    protected $dates 	= ['deleted_at'];

    // relation table
    public function categories()
    {
        return $this->hasOne('App\Models\Categories', 'category_id');
    }

    public function users()
    {
        return $this->belongsTo('App\Models\Users', 'role_id')->withDefault();
    }

    public function laporanType()
    {
        return $this->belongsTo('App\Models\Lapor', 'laporan_type_id')->withDefault();
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Lapor', 'category_id')->withDefault();
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Lapor', 'status_id')->withDefault();
    }
}

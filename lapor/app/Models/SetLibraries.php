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
        return $this->belongsTo('App\Models\SetCategories', 'category_id')->withDefault();
    }

    public function users()
    {
        return $this->hasMany('App\Models\Users', 'role_id');
    }

    public function lapor_laporan_type_id()
    {
        return $this->hasMany('App\Models\Lapor', 'laporan_type_id');
    }

    public function lapor_category_id()
    {
        return $this->hasMany('App\Models\Lapor', 'category_id');
    }

    public function lapor_status_id()
    {
        return $this->hasMany('App\Models\Lapor', 'status_id');
    }
}

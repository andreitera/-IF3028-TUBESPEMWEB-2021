<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;

    protected $table    ="users";
    protected $dates 	= ['deleted_at'];

    // relation table
    public function provinces()
    {
        return $this->hasMany('App\Models\SetLibraries', 'role_id');
    }

    public function lapor()
    {
        return $this->belongsTo('App\Models\Lapor', 'user_id')->withDefault();
    }

    public function comment()
    {
        return $this->belongsTo('App\Models\Comment', 'user_id')->withDefault();
    }
}

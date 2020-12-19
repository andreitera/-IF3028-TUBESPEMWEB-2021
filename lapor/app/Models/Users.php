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
    public function libraries()
    {
        return $this->belongsTo('App\Models\SetLibraries', 'role_id')->withDefault();
    }

    public function lapor()
    {
        return $this->hasMany('App\Models\Lapor', 'user_id');
    }

    public function comment()
    {
        return $this->hasMany('App\Models\Comment', 'user_id');
    }
}

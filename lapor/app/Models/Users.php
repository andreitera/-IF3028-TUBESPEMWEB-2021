<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Model
{
    use HasFactory;
    use SoftDeletes;

    // relation table
    public function provinces()
    {
        return $this->hasOne('App\Models\SetLibraries', 'role_id');
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

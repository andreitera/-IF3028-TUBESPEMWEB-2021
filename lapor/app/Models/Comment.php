<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table    ="set_categories";
    protected $dates 	= ['deleted_at'];

    // relation table
    public function users()
    {
        return $this->hasOne('App\Models\Users', 'user_id');
    }

    public function lapor()
    {
        return $this->hasOne('App\Models\Lapor', 'lapor_id');
    }
}

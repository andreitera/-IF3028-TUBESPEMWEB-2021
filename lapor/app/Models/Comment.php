<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table    ="komentar";
    protected $dates 	= ['deleted_at'];

    // relation table
    public function users()
    {
        return $this->belongsTo('App\Models\Users', 'user_id')->withDefault();
    }

    public function lapor()
    {
        return $this->belongsTo('App\Models\Lapor', 'lapor_id')->withDefault();
    }
}

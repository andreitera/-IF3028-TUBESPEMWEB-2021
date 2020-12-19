<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    // protected $table = 'posts';
    protected $fillable = ['judul', 'isi', 'aspect', 'file'];
}

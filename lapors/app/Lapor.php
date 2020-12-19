<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lapor extends Model
{
    protected $table = "lapors";
    protected $fillable = ['report', 'aspect', 'file'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SetCategories extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table    ="set_categories";
    protected $dates 	= ['deleted_at'];

    // relation table
    public function libraries()
    {
        return $this->belongsTo('App\Models\SetLibraries', 'category_id')->withDefault();
    }
}

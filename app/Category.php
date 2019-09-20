<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{

    public function products()
    {
        return $this->hasMany(Products::class, 'category_id', 'cat_id'); // for/pentru custom keys
        // return $this->hasMany(Products::class); /// standar primary key set va face category_id
    }

    protected $table="category";

    use SoftDeletes;
    // protected $guarded = [];
    /// sa sar peste verificare si eroarea Add [name] to fillable property to allow mass assignment on [App\Category].
    // sau corect sa nu sar
    protected $primaryKey = 'cat_id'; // set custom primary key id name

    protected $fillable = [
        'name', 'description', 'update_by', 'image',
    ];
}

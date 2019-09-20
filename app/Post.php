<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'title', 'description', 'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

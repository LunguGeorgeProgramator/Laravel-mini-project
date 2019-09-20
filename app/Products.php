<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;
    
    public function category(){
        return $this->belongsTo(Category::class);
        // "SQLSTATE[42S22]: Column not found: 1054 Unknown column 'products.category_cat_id' in 'where clause' (SQL: select * from `products` where `products`.`category_cat_id` = 2 and `products`.`category_cat_id` is not null and `products`.`deleted_at` is null)"
    }

    protected $primaryKey = 'prod_id'; // set custom primary key id name

    protected $fillable = [
        'name', 
        'category_id', 
        'description', 
        'update_by',
        'image',
    ];
}

<?php


namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function type() {
        return $this->hasMany('App\Model\ProductType', 'product_types_id');
    }
}

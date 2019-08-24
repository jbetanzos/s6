<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = 'product_types';

    public function vendors() {
        return $this->belongsToMany(
            'App\Model\Vendor',
            'product_types_vendors',
            'product_types_id',
            'vendors_id'
        );
    }
}

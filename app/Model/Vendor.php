<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = 'vendors';

    public function productType() {
        return $this->belongsToMany(
            'App\Model\ProductType',
            'product_types_vendors',
            'vendors_id',
            'product_types_id'
        );
    }
}

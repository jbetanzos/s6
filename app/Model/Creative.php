<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Creative extends Model
{
    protected $table = 'creatives';

    public function user()
    {
        $this->belongsTo('App\Model\User', 'user_id');
    }

    public function products()
    {
        return $this->hasMany('App\Model\Product', 'creatives_id');
    }
}

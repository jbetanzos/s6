<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    public function creative() {
        return $this->belongsToMany('App\Model\Creative', '');
    }
}

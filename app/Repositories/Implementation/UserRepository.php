<?php

namespace App\Repositories\Implementation;

use App\Model\User;
use App\Repositories\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{

    public function create($data)
    {
        $user = new User();
        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->address_1 = $data['address_1'];
        $user->address_2 = $data['address_2'];
        $user->city = $data['city'];
        $user->state = $data['state'];
        $user->postal_code = $data['postal_code'];
        $user->country = $data['country'];

        $user->save();
    }

    public function retrieveById($id)
    {
        return User::findOrFail($id);
    }
}

<?php
namespace App\Repositories\Implementation;

use App\Model\Creative;
use App\Model\Product;
use App\Repositories\CreativeRepositoryInterface;
use App\Repositories\UserRepositoryInterface;
use App\User;

class CreativeRepository implements CreativeRepositoryInterface
{

    /**
     * @var \App\Repositories\UserRepositoryInterface
     */
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function create($data, $products)
    {
        $creative = new Creative();
        $creative->user_id = $data['user'];

        $ps = array();
        foreach($products as $product) {
            $p = new Product();
            $p->stock = $product['stock'];
            $p->image_url = $product['image_url'];

            $ps[] = $p;
        }

        $creative->save();
        $creative->products()->saveMany($ps);
    }

    public function update($data, $products)
    {
        // TODO: Implement update() method.
    }

    public function retrieveById($id)
    {
        // TODO: Implement retriveById() method.
    }

    public function retrieveAll()
    {
        // TODO: Implement retriveAll() method.
    }
}

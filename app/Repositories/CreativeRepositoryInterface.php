<?php


namespace App\Repositories;


interface CreativeRepositoryInterface
{
    public function create($data, $products);
    public function update($data, $products);
    public function retrieveById($id);
    public function retrieveAll();
}

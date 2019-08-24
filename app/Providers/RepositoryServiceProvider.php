<?php


namespace App\Providers;


use App\Repositories\CreativeRepositoryInterface;
use App\Repositories\Implementation\CreativeRepository;
use App\Repositories\Implementation\UserRepository;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(
            CreativeRepositoryInterface::class,
            CreativeRepository::class
        );

        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository::class
        );
    }
}

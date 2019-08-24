<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * @var \App\Repositories\UserRepositoryInterface
     */
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function execute(Request $request)
    {
        $data = $request->get('data');
        $this->userRepository->create($data);
    }
}

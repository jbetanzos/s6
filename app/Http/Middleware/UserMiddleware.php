<?php

namespace App\Http\Middleware;

use App\Repositories\UserRepositoryInterface;
use Closure;

class UserMiddleware
{
    /**
     * @var \App\Repositories\UserRepositoryInterface
     */
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->route('user');

        if ($this->userRepository->retrieveById($user)) {
            return $next($request);
        }

        return response()->json(['error' => 'Unauthorized'], '401', ['X-Header-One' => 'Header Value']);
    }
}

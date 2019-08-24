<?php


namespace App\Http\Controllers\Creatives;

use App\Http\Controllers\Controller;
use App\Repositories\Implementation\CreativeRepository;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * @var App\Repositories\CreativeRepositoryInterface
     */
    private $creativeRepository;

    public function __construct(CreativeRepository $creativeRepository)
    {
        $this->creativeRepository = $creativeRepository;
    }

    public function execute(Request $request)
    {
        $data = $request->get('data');

        if (isset($data['products'])) {
            $this->creativeRepository->create(
                array('user' => $request->route('user')),
                $data['products']
            );
        }
    }
}

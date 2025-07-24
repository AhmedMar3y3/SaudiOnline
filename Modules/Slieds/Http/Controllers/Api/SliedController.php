<?php

namespace Modules\Slieds\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Modules\Support\Traits\ApiTrait;
use Modules\Slieds\Transformers\SlideResource;
use Modules\Slieds\Repositories\SliedRepository;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class SliedController extends Controller
{
    use AuthorizesRequests, ValidatesRequests, ApiTrait;

    /**
     * @var SliedRepository
     */
    private $repository;

    /**
     * CountryController constructor.
     *
     * @param SliedRepository $repository
     */
    public function __construct(SliedRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the countries.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        $slieds = $this->repository->all();

        if (count($slieds) > 0) {
            $data = SlideResource::collection($slieds);
            return $this->sendResponse($data, 'success');
        }

        return $this->sendError('Sorry not found');
    }
}

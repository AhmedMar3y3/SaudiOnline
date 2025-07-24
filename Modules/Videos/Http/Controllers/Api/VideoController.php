<?php

namespace Modules\Videos\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Modules\Support\Traits\ApiTrait;
use Modules\Videos\Transformers\VideoResource;
use Modules\Videos\Repositories\VideoRepository;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class VideoController extends Controller
{
    use AuthorizesRequests, ValidatesRequests, ApiTrait;

    /**
     * @var VideoRepository
     */
    private $repository;

    /**
     * CountryController constructor.
     *
     * @param VideoRepository $repository
     */
    public function __construct(VideoRepository $repository)
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
        $videos = $this->repository->all();

        if (count($videos) > 0) {
            $data = VideoResource::collection($videos)->response()->getData(true);
            return $this->sendResponse($data, 'success');
        }

        return $this->sendError('Sorry not found');
    }
}

<?php

namespace Modules\Teams\Http\Controllers\Api;

use Modules\Teams\Entities\Team;
use App\Http\Controllers\Controller;
use Modules\Support\Traits\ApiTrait;
use Modules\Teams\Http\Requests\TeamRequest;
use Modules\Teams\Transformers\TeamResource;
use Modules\Teams\Repositories\TeamRepository;

class TeamController extends Controller
{

    use ApiTrait;

    /**
     * @var TeamRepository
     */
    private $repository;

    /**
     * ContactController constructor.
     * @param TeamRepository $repository
     */
    public function __construct(TeamRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $team = $this->repository->all();

        $data = TeamResource::collection($team);

        return $this->sendResponse($data, 'success');
    }
}

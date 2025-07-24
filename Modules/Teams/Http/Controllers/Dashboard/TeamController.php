<?php

namespace Modules\Teams\Http\Controllers\Dashboard;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Modules\Teams\Entities\Team;
use Illuminate\Routing\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Modules\Teams\Http\Requests\TeamRequest;
use Modules\Teams\Repositories\TeamRepository;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class TeamController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * @var TeamRepository
     */
    private $repository;

    /**
     * TeamController constructor.
     * @param TeamRepository $repository
     */
    public function __construct(TeamRepository $repository)
    {
        $this->middleware('permission:read_teams')->only(['index']);
        $this->middleware('permission:create_teams')->only(['create', 'store']);
        $this->middleware('permission:update_teams')->only(['edit', 'update']);
        $this->middleware('permission:delete_teams')->only(['destroy']);
        $this->middleware('permission:show_teams')->only(['show']);
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     * @return Factory|View
     */
    public function index()
    {
        $teams = $this->repository->all();

        return view('teams::teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Factory|View
     */
    public function create()
    {
        return view('teams::teams.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param TeamRequest $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $team = $this->repository->create($request->all());

        flash(trans('teams::teams.messages.created'))->success();

        return redirect()->route('dashboard.teams.show', $team);
    }

    /**
     * Show the specified resource.
     * @param Team $team
     * @return Factory|View
     * @throws AuthorizationException
     */
    public function show(Team $team)
    {
        $team = $this->repository->find($team);

        return view('teams::teams.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param Team $team
     * @return Factory|View
     */
    public function edit(Team $team)
    {
        return view('teams::teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     * @param TeamRequest $request
     * @param Team $team
     * @return RedirectResponse
     */
    public function update(TeamRequest $request, Team $team)
    {
        $team = $this->repository->update($team, $request->all());

        flash(trans('teams::teams.messages.updated'))->success();

        return redirect()->route('dashboard.teams.show', $team);
    }

    /**
     * Remove the specified resource from storage.
     * @param Team $team
     * @return RedirectResponse
     */
    public function destroy(Team $team)
    {
        $this->repository->delete($team);

        flash(trans('teams::teams.messages.deleted'))->error();

        return redirect()->route('dashboard.teams.index');
    }
}

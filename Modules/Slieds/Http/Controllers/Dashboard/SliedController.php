<?php

namespace Modules\Slieds\Http\Controllers\Dashboard;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Modules\Slieds\Entities\Slied;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Modules\Slieds\Http\Requests\SliedRequest;
use Modules\Slieds\Repositories\SliedRepository;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class SliedController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * @var SliedRepository
     */
    private $repository;

    /**
     * SliedController constructor.
     * @param SliedRepository $repository
     */
    public function __construct(SliedRepository $repository)
    {
        $this->middleware('permission:read_slieds')->only(['index']);
        $this->middleware('permission:create_slieds')->only(['create', 'store']);
        $this->middleware('permission:update_slieds')->only(['edit', 'update']);
        $this->middleware('permission:delete_slieds')->only(['destroy']);
        $this->middleware('permission:show_slieds')->only(['show']);
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     * @return Factory|View
     */
    public function index()
    {
        $slieds = $this->repository->all();

        return view('slieds::slieds.index', compact('slieds'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Factory|View
     */
    public function create()
    {
        return view('slieds::slieds.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param SliedRequest $request
     * @return RedirectResponse
     */
    public function store(SliedRequest $request)
    {
        $slied = $this->repository->create($request->all());

        flash(trans('slieds::slieds.messages.created'))->success();

        return redirect()->route('dashboard.slieds.index');
    }

    /**
     * Show the specified resource.
     * @param Slied $slied
     * @return Factory|View
     * @throws AuthorizationException
     */
    public function show(Slied $slied)
    {
        $slied = $this->repository->find($slied);

        return view('slieds::slieds.show', compact('slied'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param Slied $slied
     * @return Factory|View
     */
    public function edit(Slied $slied)
    {
        return view('slieds::slieds.edit', compact('slied'));
    }

    /**
     * Update the specified resource in storage.
     * @param SliedRequest $request
     * @param Slied $slied
     * @return RedirectResponse
     */
    public function update(SliedRequest $request, Slied $slied)
    {
        $slied = $this->repository->update($slied, $request->all());

        flash(trans('slieds::slieds.messages.updated'))->success();

        return redirect()->route('dashboard.slieds.show', $slied);
    }

    /**
     * Remove the specified resource from storage.
     * @param Slied $slied
     * @return RedirectResponse
     */
    public function destroy(Slied $slied)
    {
        $this->repository->delete($slied);

        flash(trans('slieds::slieds.messages.deleted'))->error();

        return redirect()->route('dashboard.slieds.index');
    }
}

<?php

namespace Modules\Videos\Http\Controllers\Dashboard;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Videos\Entities\Video;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Modules\Videos\Http\Requests\VideoRequest;
use Modules\Videos\Repositories\VideoRepository;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class VideoController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * @var VideoRepository
     */
    private $repository;

    /**
     * VideoController constructor.
     * @param VideoRepository $repository
     */
    public function __construct(VideoRepository $repository)
    {
        $this->middleware('permission:read_videos')->only(['index']);
        $this->middleware('permission:create_videos')->only(['create', 'store']);
        $this->middleware('permission:update_videos')->only(['edit', 'update']);
        $this->middleware('permission:delete_videos')->only(['destroy']);
        $this->middleware('permission:show_videos')->only(['show']);
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     * @return Factory|View
     */
    public function index()
    {
        $videos = $this->repository->all();

        return view('videos::videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Factory|View
     */
    public function create()
    {
        return view('videos::videos.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param VideoRequest $request
     * @return RedirectResponse
     */
    public function store(VideoRequest $request)
    {
        $video = $this->repository->create($request->all());

        flash(trans('videos::videos.messages.created'))->success();

        return redirect()->route('dashboard.videos.show', $video);
    }

    /**
     * Show the specified resource.
     * @param Video $video
     * @return Factory|View
     * @throws AuthorizationException
     */
    public function show(Video $video)
    {
        $video = $this->repository->find($video);

        return view('videos::videos.show', compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param Video $video
     * @return Factory|View
     */
    public function edit(Video $video)
    {
        return view('videos::videos.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     * @param VideoRequest $request
     * @param Video $video
     * @return RedirectResponse
     */
    public function update(VideoRequest $request, Video $video)
    {
        $video = $this->repository->update($video, $request->all());

        flash(trans('videos::videos.messages.updated'))->success();

        return redirect()->route('dashboard.videos.show', $video);
    }

    /**
     * Remove the specified resource from storage.
     * @param Video $video
     * @return RedirectResponse
     */
    public function destroy(Video $video)
    {
        $this->repository->delete($video);

        flash(trans('videos::videos.messages.deleted'))->error();

        return redirect()->route('dashboard.videos.index');
    }
}

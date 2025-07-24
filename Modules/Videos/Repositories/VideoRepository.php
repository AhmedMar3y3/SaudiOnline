<?php
namespace Modules\Videos\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Modules\Contracts\CrudRepository;
use Modules\Videos\Entities\Video;
use Modules\Videos\Http\Filters\VideoFilter;

class VideoRepository implements CrudRepository
{
    private VideoFilter $filter;

    /**
     * VideoRepository constructor.
     * @param VideoFilter $filter
     */
    public function __construct(VideoFilter $filter)
    {
        $this->filter = $filter;
    }

    /**
     * @return LengthAwarePaginator
     */
    public function all()
    {
        return Video::filter($this->filter)->get();
    }

    /**
     * @param array $data
     * @return Model
     */
    public function create(array $data)
    {
        $video = Video::create($data);

        return $video;
    }

    /**
     * @param mixed $model
     * @return Model|void
     */
    public function find($model)
    {
        if ($model instanceof Video) {
            return $model;
        }

        return Video::findOrFail($model);
    }

    /**
     * @param mixed $model
     * @param array $data
     * @return Model|Video|void
     */
    public function update($model, array $data)
    {
        $video = $this->find($model);

        if (!empty($video)) {
            $video->update($data);
        }

        return $video;
    }

    /**
     * @param mixed $model
     * @throws \Exception
     */
    public function delete($model)
    {
        $this->find($model)->delete();
    }
}

<?php

namespace Modules\Teams\Repositories;

use Modules\Teams\Entities\Team;
use Illuminate\Support\Collection;
use Modules\Contracts\CrudRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class TeamRepository implements CrudRepository
{

    /**
     * @return Collection|Team[]
     */
    public function all()
    {
        return Team::get(['id', 'name', 'title']);
    }

    /**
     * @param array $data
     * @return Model
     */
    public function create(array $data)
    {
        /**
         * @var Team
         */
        $team = Team::create($data);

        if (isset($data['image'])) {
            $team->addMedia($data['image'])->toMediaCollection();
        }

        return $team;
    }

    /**
     * @param mixed $model
     * @return Model|void
     */
    public function find($model)
    {
        if ($model instanceof Team) {
            return $model;
        }

        return Team::findOrFail($model);
    }

    /**
     * @param mixed $model
     * @param array $data
     * @return Model|Team|void
     */
    public function update($model, array $data)
    {
        /**
         * @var Team
         */
        $team = $this->find($model);

        if (!empty($team) && $data) {
            $team->update($data);

            if (isset($data['image'])) {
                $team->clearMediaCollection();

                $team->addMedia($data['image'])->toMediaCollection();
            }
        }

        return $team;
    }

    /**
     * @param mixed $model
     * @throws \Exception
     */
    public function delete($model)
    {
        $team = $this->find($model);

        $team->clearMediaCollection();
        $team->delete();
    }
}

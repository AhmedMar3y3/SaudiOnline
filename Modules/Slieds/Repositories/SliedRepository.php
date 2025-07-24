<?php

namespace Modules\Slieds\Repositories;
use Modules\Slieds\Entities\Slied;
use Modules\Contracts\CrudRepository;
use Illuminate\Database\Eloquent\Model;

class SliedRepository implements CrudRepository
{
  /**
   * @return \Illuminate\Support\Collection|Slied[]
   */
  public function all()
  {
    return Slied::get(['id', 'link']);
  }

  /**
   * @param array $data
   * @return Model
   */
  public function create(array $data)
  {
    $slied = Slied::create($data);

    $slied->addMedia($data['image'])->toMediaCollection();

    return $slied;
  }

  /**
   * @param mixed $model
   * @return Model|void
   */
  public function find($model)
  {
    if ($model instanceof Slied) {
      return $model;
    }

    return Slied::findOrFail($model);
  }

  /**
   * @param mixed $model
   * @param array $data
   * @return Model|Slied|void
   */
  public function update($model, array $data)
  {
    $slied = $this->find($model);

    if (!empty($slied)) {
      $slied->clearMediaCollection();

      $slied->addMedia($data['image']);
    }

    return $slied;
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
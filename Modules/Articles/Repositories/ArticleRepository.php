<?php

namespace Modules\Articles\Repositories;

use Exception;
use Illuminate\Support\Arr;
use Modules\Contracts\CrudRepository;
use Modules\Articles\Entities\Article;
use Illuminate\Database\Eloquent\Model;
use Modules\Articles\Http\Filters\ArticleFilter;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ArticleRepository implements CrudRepository
{
    private ArticleFilter $filter;

    /**
     * ArticleRepository constructor.
     * @param ArticleFilter $filter
     */
    public function __construct(ArticleFilter $filter)
    {
        $this->filter = $filter;
    }

    /**
     * @return LengthAwarePaginator
     */
    public function all()
    {
        return Article::filter($this->filter)->orderBy('id', 'DESC')->get();
    }

    /**
     * @param array $data
     * @return Model
     */
    public function create(array $data)
    {
        $article = auth()->user()->articles()->create($data);

        $article->addMedia(Arr::get($data, 'image'))->toMediaCollection();

        return $article;
    }

    /**
     * @param mixed $model
     * @return Model|void
     */
    public function find($model)
    {
        if ($model instanceof Article) {
            return $model->findOrFail($model->getKey());
        }

        return Article::with('comments')->findOrFail($model);
    }

    /**
     * @param mixed $model
     * @param array $data
     * @return Model|Article|void
     */
    public function update($model, array $data)
    {
        $article = $this->find($model);

        if (!empty($article)) {
            $article->update($data);
        }

        if (isset($data['image'])) {
            $article->addMedia($data['image'])->toMediaCollection();
        }

        return $article;
    }

    /**
     * @param mixed $model
     * @throws Exception
     */
    public function delete($model)
    {
        $this->find($model)->delete();
    }
}

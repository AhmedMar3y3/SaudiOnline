<?php

namespace Modules\Categories\Entities\Relations;

use Modules\Articles\Entities\Article;
use Modules\Categories\Entities\Category;

trait CategoryRelations
{
    public function subcategories()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}

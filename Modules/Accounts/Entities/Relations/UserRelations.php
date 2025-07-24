<?php

namespace Modules\Accounts\Entities\Relations;

use Modules\Articles\Entities\Article;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait UserRelations
{
  public function articles(): HasMany
  {
    return $this->hasMany(Article::class);
  }
}
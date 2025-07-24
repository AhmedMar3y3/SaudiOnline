<?php

namespace Modules\Articles\Entities\Relations;

use Modules\Accounts\Entities\User;
use Modules\Comments\Entities\Comment;
use Modules\Categories\Entities\Category;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait ArticleRelations
{
  /**
   * Category relation
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function category(): BelongsTo
  {
    return $this->belongsTo(Category::class);
  }

  /**
   * Comments relation
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function comments(): HasMany
  {
    return $this->hasMany(Comment::class);
  }

  /**
   * Comments relation
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function user(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }
}
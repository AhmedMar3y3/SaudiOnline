<?php

namespace Modules\Comments\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Comments\Database\factories\CommentFactory;

class Comment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'article_id',
        'name',
        'email',
        'content',
    ];

    protected static function newFactory(): CommentFactory
    {
        return CommentFactory::new();
    }
}

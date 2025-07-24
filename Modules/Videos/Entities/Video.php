<?php

namespace Modules\Videos\Entities;

use App\Http\Filters\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Support\Traits\Selectable;
use Modules\Videos\Database\factories\VideoFactory;

class Video extends Model
{
    use HasFactory,
        Filterable,
        Selectable;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'sub_name',
        'link'
    ];

    protected static function newFactory(): VideoFactory
    {
        return VideoFactory::new();
    }
}

<?php

namespace Modules\Teams\Entities;

use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Modules\Teams\Database\factories\TeamFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model implements HasMedia
{
    use HasFactory,
        InteractsWithMedia,
        HasUploader;

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'title',
    ];

    protected static function newFactory(): TeamFactory
    {
        return TeamFactory::new();
    }
}

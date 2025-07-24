<?php

namespace Modules\Slieds\Entities;

use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Slieds\Database\factories\SliedFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Slied extends Model implements HasMedia
{
    use HasFactory,
        InteractsWithMedia,
        HasUploader;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'link'
    ];

    protected $with = ['media'];

    protected static function newFactory(): SliedFactory
    {
        return SliedFactory::new();
    }
}

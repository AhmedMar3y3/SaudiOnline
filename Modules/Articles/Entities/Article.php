<?php

namespace Modules\Articles\Entities;

use App\Http\Filters\Filterable;
use Spatie\MediaLibrary\HasMedia;
use Modules\Support\Traits\Selectable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Modules\Articles\Entities\Helpers\ArticleHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Articles\Entities\Relations\ArticleRelations;
use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;

class Article extends Model implements HasMedia
{
    use Filterable,
        Selectable,
        InteractsWithMedia,
        HasUploader,
        ArticleHelpers,
        ArticleRelations,
        HasFactory;

    /**
     * @var array
     */
    protected $fillable = [
        'category_id',
        'name',
        'content',
        'created_at',
        'updated_at',
    ];

    /**
     * @var array
     */
    protected $with = [
        'category',
        'media',
        'user',
    ];

    /**
     * Define the media collections.
     *
     * @return void
     */
    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('default')
            ->useFallbackUrl('https://ui-avatars.com/api/?name=' . rawurldecode($this->name) . '&bold=true')
            ->singleFile()
            ->registerMediaConversions(function () {
                $this->addMediaConversion('thumb')
                    ->width(50);

                $this->addMediaConversion('small')
                    ->width(120);

                $this->addMediaConversion('medium')
                    ->width(160);

                $this->addMediaConversion('large')
                    ->width(320);

                $this->addMediaConversion('extra_large')
                    ->width(720);
            });
    }

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Articles\Database\factories\ArticleFactory::new();
    }

}

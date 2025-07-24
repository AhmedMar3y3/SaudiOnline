<?php

namespace Modules\Categories\Entities;

use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use App\Http\Filters\Filterable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Categories\Entities\Helpers\CategoryHelpers;
use Modules\Categories\Entities\Relations\CategoryRelations;
use Modules\Support\Traits\Selectable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Category extends Model implements TranslatableContract, HasMedia
{
    use Translatable,
        Filterable,
        Selectable,
        HasUploader,
        InteractsWithMedia,
        CategoryHelpers,
        CategoryRelations,
        HasFactory;

    /**
     * @var array
     */
    protected $fillable = [
        'parent_id',
        'active',
        'created_at',
        'updated_at',
    ];

    /**
     * @var array $casts
     */
    protected $casts = [
        'active' => 'boolean',
    ];

    /**
     * @var array
     */
    public $translatedAttributes = ['name', 'description'];

    /**
     * @var array
     */
    protected $with = [
        'translations',
        'subcategories'
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

    protected static function newFactory()
    {
        return \Modules\Categories\Database\factories\CategoryFactory::new();
    }
}

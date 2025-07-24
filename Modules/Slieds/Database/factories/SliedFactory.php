<?php

namespace Modules\Slieds\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SliedFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Slieds\Entities\Slied::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'link' => 'https://placehold.co/400x400',
        ];
    }
}


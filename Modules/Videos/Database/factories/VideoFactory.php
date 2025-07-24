<?php

namespace Modules\Videos\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Videos\Entities\Video::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'sub_name' => $this->faker->name,
            'link' => $this->faker->url,
        ];
    }
}


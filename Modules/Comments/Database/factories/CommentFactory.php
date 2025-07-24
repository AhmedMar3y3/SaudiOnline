<?php

namespace Modules\Comments\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Comments\Entities\Comment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}


<?php

namespace Modules\Articles\Database\Seeders;

use Illuminate\Support\Arr;
use Illuminate\Database\Seeder;
use Modules\Accounts\Entities\User;
use Modules\Articles\Entities\Article;
use Modules\Categories\Entities\Category;

class ArticlesDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seed($this->articles());
    }

    /**
     * Run the database seeds.
     *
     * @param array $articles
     * @return void
     */
    public function seed(array $articles = []): void
    {
        foreach ($articles as $lab) {
            $data = Arr::except($lab, ['image']);

            $model = Article::create($data);
        }
    }

    private function articles()
    {
        return [
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'رمضان كريم',
                'content' => 'رمضان كريم',
                'user_id' => User::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
        ];
    }
}

<?php

namespace Modules\Categories\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Modules\Categories\Entities\Category;

class CategoryDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seed($this->categories());
    }

    /**
     * Run the database seeds.
     *
     * @param array $categories
     * @return void
     */
    public function seed(array $categories = []): void
    {
        foreach ($categories as $category) {
            $this->createCategoryWithSubcategories($category);
        }
    }

    /**
     * Create a category with its subcategories.
     *
     * @param array $categoryData
     * @param Category|null $parentCategory
     * @return void
     */
    protected function createCategoryWithSubcategories(array $categoryData, Category $parentCategory = null): void
    {
        $subcategoriesData = Arr::pull($categoryData, 'subcategories', []);

        // Create the category, either as a parent or subcategory
        if ($parentCategory) {
            $category = $parentCategory->subcategories()->create($categoryData);
        } else {
            $category = Category::create($categoryData);
        }

        // Recursively create subcategories
        foreach ($subcategoriesData as $subcategoryData) {
            $this->createCategoryWithSubcategories($subcategoryData, $category);
        }
    }

    protected function categories(): array
    {
        return [
            [
                'name:ar' => 'اخبار',
                'name:en' => 'News',
                'description:ar' => 'وصف اخبار السياحة السعودية',
                'description:en' => 'Category description',
                'active' => true,
                'subcategories' => [
                    [
                        'name:ar' => 'اهم الاخبار',
                        'name:en' => 'The most important news',
                        'description:ar' => 'اهم الاخبار',
                        'description:en' => 'The most important news',
                        'active' => true,
                    ],
                    [
                        'name:ar' => 'اخبار السياحة السعودية',
                        'name:en' => 'Saudi tourism news',
                        'description:ar' => 'اخبار السياحة السعودية',
                        'description:en' => 'Saudi tourism news',
                        'active' => true,
                    ],
                    [
                        'name:ar' => 'اخبار السياحة الخليجية',
                        'name:en' => 'Gulf tourism news',
                        'description:ar' => 'اهم الاخبار',
                        'description:en' => 'The most important news',
                        'active' => true,
                    ],
                    [
                        'name:ar' => 'اخبار السياحة العربية',
                        'name:en' => 'Arab tourism news',
                        'description:ar' => 'اهم الاخبار',
                        'description:en' => 'The most important news',
                        'active' => true,
                    ],
                    [
                        'name:ar' => 'اخبار سياحة عالمية',
                        'name:en' => 'International tourism news',
                        'description:ar' => 'اهم الاخبار',
                        'description:en' => 'The most important news',
                        'active' => true,
                    ]
                ]
            ],
            [
                'name:ar' => 'فنادق',
                'name:en' => 'Hotels',
                'description:ar' => 'وصف اخبار السياحة السعودية',
                'description:en' => 'Category description',
                'active' => true,
            ],
            [
                'name:ar' => 'مطاعم',
                'name:en' => 'Restaurants',
                'description:ar' => 'وصف اخبار السياحة السعودية',
                'description:en' => 'Restaurants description',
                'active' => true,
            ],
            [
                'name:ar' => 'تقنيات',
                'name:en' => 'Techniques',
                'description:ar' => 'وصف تقنيات',
                'description:en' => 'Category description',
                'active' => true,
            ],
            [
                'name:ar' => 'مقالات',
                'name:en' => 'Article',
                'description:ar' => 'وصف مقالات',
                'description:en' => 'Category description',
                'active' => true,
            ],
        ];
    }
}

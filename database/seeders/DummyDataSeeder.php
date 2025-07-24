<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Accounts\Database\Seeders\UsersTableSeeder;
use Modules\Pages\Database\Seeders\PagesDatabaseSeeder;
use Modules\Countries\Database\Seeders\CountriesTableSeeder;
use Modules\Articles\Database\Seeders\ArticlesDatabaseSeeder;
use Modules\Settings\Database\Seeders\SettingsDatabaseSeeder;
use Modules\Categories\Database\Seeders\CategoryDatabaseSeeder;
use Modules\Slieds\Database\Seeders\SliedsDatabaseSeeder;
use Modules\Teams\Database\Seeders\TeamsDatabaseSeeder;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);
        //        if (file_exists(storage_path('installed'))) {
        $this->call(UsersTableSeeder::class);
        //        }
        if (\Module::collections()->has('Categories')) {
            $this->call(CategoryDatabaseSeeder::class);
        }

        if (\Module::collections()->has('Articles')) {
            $this->call(ArticlesDatabaseSeeder::class);
        }
        if (\Module::collections()->has('Pages')) {
            $this->call(PagesDatabaseSeeder::class);
        }
        if (\Module::collections()->has('Countries')) {
            $this->call(CountriesTableSeeder::class);
        }
        if (\Module::collections()->has('Slieds')) {
            $this->call(SliedsDatabaseSeeder::class);
        }
        if (\Module::collections()->has('Teams')) {
            $this->call(TeamsDatabaseSeeder::class);
        }

        $this->call(SettingsDatabaseSeeder::class);
    }
}

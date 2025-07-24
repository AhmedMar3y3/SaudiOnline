<?php

namespace Modules\Settings\Database\Seeders;

use App\Support\SettingJson;
use Illuminate\Database\Seeder;
use Laraeast\LaravelSettings\Facades\Settings;

class SettingsDatabaseSeeder extends Seeder
{
    /**
     * The list of the files keys.
     *
     * @var array
     */
    protected $files = [
        'logo',
        // 'favicon',
        // 'loginLogo',
        // 'loginBackground',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Settings::set('name', 'Nebraas');
        // Settings::set('name:ar', 'Nebraas');

        Settings::set('email', 'info@nebraas.com');

        Settings::set('location', 'Nebraas');

        Settings::set('location', 'elit  Worem Worem ipsum  dolor dolor dolor sit amet,  Woremconsectetur ipiscing');

        Settings::set('facebook', 'https://facebook.com/nebraas');

        Settings::set('instagram', 'https://instagram.com/nebraas');

        Settings::set('phone', '+201023331690');

        Settings::set('youtube', 'https://youtube.com/nebraas');

        Settings::set('whatsapp', '+201023331690');

        Settings::set('keywords', 'articles,news');

        Settings::set('description', 'Nebraas description');
        // Settings::set('description:ar', 'Nebraas');

        Settings::set('meta_description', 'Nebraas');
        // Settings::set('meta_description:ar', 'Nebraas');

        // images
        foreach ($this->files as $file) {
            Settings::set($file)->addMedia(__DIR__ . '/images/' . $file . '.svg')
                ->preservingOriginal()
                ->toMediaCollection($file);
        }

        app(SettingJson::class)->update();
    }
}

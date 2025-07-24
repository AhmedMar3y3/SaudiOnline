<?php

namespace Modules\Slieds\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Slieds\Entities\Slied;

class SliedsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slied::factory()->count(6)->create();
    }
}

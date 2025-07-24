<?php

namespace Modules\Teams\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Teams\Entities\Team;

class TeamsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::factory()->count(10)->create();
    }
}

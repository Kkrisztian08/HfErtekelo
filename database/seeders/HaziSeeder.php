<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hazi;

class HaziSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hazi::factory(10)->create();
    }
}

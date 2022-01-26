<?php

namespace Database\Seeders;


use App\Models\Hazi;
use Illuminate\Database\Seeder;

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


<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class producerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Producer::factory(10)->create();
    }
}

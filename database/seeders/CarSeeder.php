<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // DB::table('cars')->insert([
           
        //     'created_at' => Carbon::parse('7-10-2002'),
        //     'updated_at' => Carbon::parse('18-10-2002'),
        //     'image'=>Carbon::parse('./public/Images/img1.jpg'),

        // ]);
       Car::factory()->count(3)->create();
    }
}
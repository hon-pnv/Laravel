<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'model' => $this->faker->name(),
            'description' => $this->faker->name(),
            'producer_id' =>rand(1,10),
            'produced_on' =>now(),
            'image'=>'https://imgd.aeplcdn.com/600x337/n/cw/ec/106257/venue-exterior-right-front-three-quarter-2.jpeg?isig=0&q=75',
        ];
    }
}

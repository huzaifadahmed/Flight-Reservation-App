<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Departure;
use App\Models\Arrival;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $price = $this->faker->numberBetween(199,1000);

        return [
            'flightNumber'=>$this->faker->regexify('[A-Za-z0-9]{5}'),
            'departure'=>$this->faker->randomElement(['Toronto','Halifax','Whitehorse','Vancouver','Calgary','Edmonton']),
            'arrival'=>$this->faker->randomElement(['Toronto','Halifax','Whitehorse','Vancouver','Calgary','Edmonton']),
            'date'=>$this->faker->dateTimeBetween('tomorrow','60 days'),
            'aircraft'=>$this->faker->randomElement(['aircraft_1','aircraft_2','aircraft_3']),
            'price'=>$price*1.1,
            'basePrice'=>$price,
            'passengersCount'=>$this->faker->numberBetween(1,144),

        ];
    }
}

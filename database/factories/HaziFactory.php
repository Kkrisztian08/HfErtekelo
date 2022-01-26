<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HaziFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "diak"=>$this->faker->name(),
            "url"=>$this->faker->url(),
            //"jegy"=>$this->faker->numberBetween(1,5),
            "jegy"=>$this->faker->numberBetween(1,1),
            "ertekeles"=>"nincs", 
            //"osztaly" =>$this->faker->numberBetween(9,12)+" "+randomLetter(),

        ];
    }
}

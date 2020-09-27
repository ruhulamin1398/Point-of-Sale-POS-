<?php

namespace Database\Factories;

use App\Models\customerRating;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class customerRatingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = customerRating::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'star_count' => $this->faker->numberBetween($min = 1, $max = 5) ,
            'name' => $this->faker->name,
            'description' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
          
        ];
    }
}

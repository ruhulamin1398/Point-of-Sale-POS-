<?php

namespace Database\Factories;

use App\Models\employeeDutyMonthly;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class employeeDutyMonthlyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = employeeDutyMonthly::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigit ,
            'employee_id' => $this->faker->randomDigit,
            'month' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}

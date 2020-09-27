<?php

namespace Database\Factories;

use App\Models\employeePayment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class employeePaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = employeePayment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigit,
            'employee_id' => $this->faker->randomDigit,
            'employee_payment_type_id' => $this->faker->randomDigit,
            'status' => 'completed',
            'date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'Comment' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
       
            
        ];
    }
}

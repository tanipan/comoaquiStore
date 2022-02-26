<?php

namespace Database\Factories;

use App\Models\Customers;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customers::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "lastname" => $this->faker->lastName(),
            "email" => $this->faker->email(),
            "dateBirth" => $this->faker->date(),
            "phone" => $this->faker->phoneNumber(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 
            "token" => Str::random(32),
            "observations" => $this->faker->text(),
        ];
    }
}

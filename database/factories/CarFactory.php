<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand'=>$this->faker->name(),
            'model'=>$this->faker->name(),
            'seats'=>rand(4,5),
            'doors'=>rand(3,5),
            'gearBoxType'=>$this->faker->name(),
            'price'=>rand(14000,70000),
            'color'=>$this->faker->colorName(),
        ];
    }
}

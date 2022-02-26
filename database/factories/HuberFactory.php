<?php

namespace Database\Factories;

use App\Models\Huber;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class HuberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Huber::class;

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
            "address" => $this->faker->address(),
            "town" => $this->faker->word(),
            "province" => $this->faker->word(),
            "cp" => $this->faker->postcode(),
            "lat" => $this->faker->latitude(-90, 90),
            "lon" => $this->faker->longitude(-180, 180),
            "email" => $this->faker->email(),
            "phone" => $this->faker->phoneNumber(),
            "message" => $this->faker->text(),
            //"autonomous" => rand(0, 1),
            //"driving_license" => rand(0, 1),
            "token" => Str::random(32)
        ];
    }
}

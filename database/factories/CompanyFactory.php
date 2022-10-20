<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\UploadedFile;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->firstName(),
            "email" => $this->faker->email,
            "logo" => UploadedFile::fake()->image(uniqid() . '.jpg',100,100),
            "website" => "http://google.com",
        ];
    }
}

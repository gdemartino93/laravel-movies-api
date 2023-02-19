<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake() -> unique() -> words(rand(1,3),true),
            'cover' => fake() -> imageUrl(200,200,'animals',true),
            'description' => fake() -> sentences(3,true),
            'vote' => fake() -> randomFloat(1,1,5),
            'year' => fake() -> year(now())
        ];
    }
}

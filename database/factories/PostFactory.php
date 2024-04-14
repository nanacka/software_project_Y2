<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $randId = random_int(1,10);

        return [
            'title' => fake()->text(10),
            'description' => fake()->text(100),
            'dimensions' => fake()->text(100),
            'materials' => fake()->text(100),
            'make' => 'handmade',
            'user_id'=> $randId
            //
        ];
    }
}

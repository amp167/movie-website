<?php

namespace Database\Factories;

use App\Models\Actor;
use App\Models\Category;
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
    public function definition()
    {
        return [
            'actor_id'=>Actor::factory(),
            'category_id'=>Category::factory(),
            'name'=>$this->faker->name(),
            'slug'=>$this->faker->slug(),
            'intro'=>$this->faker->sentence(),
            'body'=>$this->faker->paragraph(),
            'downloadLink1'=>$this->faker->name(),
            'downloadLink2'=>$this->faker->name(),
            'downloadLink3'=>$this->faker->name(),
        ];
    }
}

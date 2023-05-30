<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $action = Category::factory()->create(['name'=>'action']);
        $honor = Category::factory()->create(['name'=>'honor']);
        $funny = Category::factory()->create(['name'=>'funny']);

        Movie::factory(5)->create(['category_id'=>$action]);
        Movie::factory(5)->create(['category_id'=>$honor]);
        Movie::factory(5)->create(['category_id'=>$funny]);
    }
}

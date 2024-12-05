<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

//        User::factory(10)->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
//        Post::factory(20)
//            ->has(Tag::factory()->count(3))
//            ->has(Comment::factory()->count(5))
//            ->create();
        $this->call(JobSeeder::class);
    }

}

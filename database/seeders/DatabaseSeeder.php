<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(TaskGroupSeeder::class);
        \App\Models\User::factory(50)->create();
        \App\Models\Task::factory(200)->create();
    }
}

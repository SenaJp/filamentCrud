<?php

namespace Database\Seeders;

use App\Models\TaskGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TaskGroup::insert([
            [
                'title' => 'Backlog',
                'description' => fake()->sentence(3),
            ],
            [
                'title' => 'To Do',
                'description' => fake()->sentence(3),
            ],
            [
                'title' => 'In progress',
                'description' => fake()->sentence(3),
            ],
            [
                'title' => 'Testing',
                'description' => fake()->sentence(3),
            ],
            [
                'title' => 'Done',
                'description' => fake()->sentence(3),
            ]
        ]);
    }
}

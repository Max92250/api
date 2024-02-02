<?php

use App\Models\Task;
use App\Models\User; // Add this line
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(20)->create();
        Task::factory(20)->create();
    }
}

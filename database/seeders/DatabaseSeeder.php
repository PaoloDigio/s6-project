<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Project;
use App\Models\Task;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
{
    User::factory(10)->create()->each(function ($user) {
        $projects = Project::factory(3)->create(['user_id' => $user->id]);

        $projects->each(function ($project) {
            Task::factory(5)->create(['project_id' => $project->id]);
        });
    });
}
}

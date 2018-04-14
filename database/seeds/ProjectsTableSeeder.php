<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $project = new Project;
        $project->name = "Android Project";
        $project->project_manager = "Will Arnold";
        $project->description = "Project Description.";
        $project->initial_fees = 100;
        $project->client_id = 1;
        $project->location_id = 1;
        $project->save();

    }
}

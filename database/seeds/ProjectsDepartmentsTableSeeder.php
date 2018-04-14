<?php

use Illuminate\Database\Seeder;
use App\ProjectDepartment;

class ProjectsDepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $projectDepartment = new ProjectDepartment;
        $projectDepartment->project_id = 1;
        $projectDepartment->department_id = 1;
        $projectDepartment->save();

    }
}

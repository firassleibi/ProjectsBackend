<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(SubservicesTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(ProjectsDepartmentsTableSeeder::class);
        $this->call(VersionsTableSeeder::class);
    }
}

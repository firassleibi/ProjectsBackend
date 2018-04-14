<?php

use Illuminate\Database\Seeder;
use App\Version;

class VersionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $version = new Version;

        $version->name = "Version 1";
        $version->change_log = "-New Updates";
        $version->timeline = "3";
        $version->project_id = "1";
        $version->expenses = "200";
        $version->save();
    }
}

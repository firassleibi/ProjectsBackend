<?php

use Illuminate\Database\Seeder;
use App\Subservice;

class SubservicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $subservice = new Subservice;
        $subservice->name = 'Android Backend Development';
        $subservice->service_id = 1;
        $subservice->save();

        $subservice = new Subservice;
        $subservice->name = 'Android Frontend Development';
        $subservice->service_id = 1;
        $subservice->save();

    }
}

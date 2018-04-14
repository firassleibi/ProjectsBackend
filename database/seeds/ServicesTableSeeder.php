<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $service = new Service;
        $service->name = 'Android Development';
        $service->department_id = 1;
        $service->save();
    }
}

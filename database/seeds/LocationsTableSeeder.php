<?php

use Illuminate\Database\Seeder;
use App\Location;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $location = new Location;
        $location->address = 'Dubai, JLT';
        $location->latitude = '25.0770844';
        $location->longitude = '55.1481566';
        $location->save();

        $location = new Location;
        $location->address = 'Dubai, Business Bay';
        $location->latitude = '25.0770844';
        $location->longitude = '55.1481566';
        $location->save();

        $location = new Location;
        $location->address = 'Dubai, Alkarama';
        $location->latitude = '25.0770844';
        $location->longitude = '55.1481566';
        $location->save();
    }
}

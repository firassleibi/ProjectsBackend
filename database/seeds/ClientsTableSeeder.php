<?php

use Illuminate\Database\Seeder;
use App\Client;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $client = new Client;
        $client->fullname = 'Ahmad';
        $client->mobile = '971524219541';
        $client->email = 'test@test.com';
        $client->save();

        $client = new Client;
        $client->fullname = 'Amin';
        $client->mobile = '971524219544';
        $client->email = 'test@test.com';
        $client->save();

        $client = new Client;
        $client->fullname = 'John';
        $client->mobile = '971523219541';
        $client->email = 'test@test.com';
        $client->save();
    }
}

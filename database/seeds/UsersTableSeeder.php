<?php

use Illuminate\Database\Seeder;
use App\User;
use \Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User;
        $user->username = 'admin';
        $user->password = Hash::make('admin');
        $user->save();

    }
}

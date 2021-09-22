<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           DB::table('users')->insert(
               [

            [
            'name'=> 'Barhoumi Chawki',  // admin role 1
            'email'=> 'barhoumi.chawki@gmail.com',
            'password'=> bcrypt('456789'),
            'img_uri'=> '/img/users/chiheb.jpg',
            'created_at' => Carbon::create(2021,5, 03),
            'updated_at' => Carbon::create(2021,6, 03),
            ],
            [
            'name'=> 'tndevfactory', // employee role 2
            'email'=> 'tndevfactory@gmail.com',
            'password'=> bcrypt('456789'),
            'img_uri'=> '/img/users/abdelhamid.jpg',
            'created_at' => Carbon::create(2021,4, 03),
            'updated_at' => Carbon::create(2021,6, 13),
            ],
            [
            'name'=> 'support',  // client role 3
            'email'=> 'support@tn-devfactory.com',
            'password'=> bcrypt('456789'),
            'img_uri'=> '/img/users/siwar.png',
            'created_at' => Carbon::create(2021,3, 03),
            'updated_at' => Carbon::create(2021,4, 03),
            ],
            [
            'name'=> 'tndev8', // vendeur role 4
            'email'=> 'tndev8@gmail.com',
            'password'=> bcrypt('456789'),
            'img_uri'=> '/img/empty_photo/empty-user.jpg',
            'created_at' => Carbon::create(2021,3, 03),
            'updated_at' => Carbon::create(2021,4, 03),
            ],


            
        ]);


        // attach role 
        User::find(1)->roles()->attach(1);
        User::find(2)->roles()->attach(2);
        User::find(3)->roles()->attach(3);
        User::find(4)->roles()->attach(4);
    }
}

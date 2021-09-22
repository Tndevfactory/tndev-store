<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

     // admin == 1
     // employee == 2
     // client == 3
     // vendeur == 4

          DB::table('roles')->insert(
             [
                [ 'name'=> 'admin'],
                [ 'name'=> 'employee'],
                [ 'name'=> 'client'],
                [ 'name'=> 'vendeur'],
             ]);

             
    }
}

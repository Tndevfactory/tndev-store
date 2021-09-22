<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\CategorySeeder;

use Database\Seeders\SubCategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(CategorySeeder::class);
        $this->call(SubCategorySeeder::class);
        $this->call(ProductSeeder::class);

        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);

        $this->call(BlogCategorySeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(TagSeeder::class);

      //  \App\Models\Product::factory(10)->create();

    }
}

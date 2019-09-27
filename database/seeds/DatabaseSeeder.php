<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BrandTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(ProjectImageTableSeeder::class);
        $this->call(ProjectImageTagTableSeeder::class);
        $this->call(ProductImageTableSeeder::class);
        $this->call(ProductTagTableSeeder::class);
        $this->call(ProductProjectImageTableSeeder::class);
    }
}

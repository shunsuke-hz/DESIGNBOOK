<?php

use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Brand::class, 10)->create()->each(function ($brand){
        factory(App\Project::class, 1)->create(['brand_id' => $brand->id ]);
        factory(App\Product::class, 1)->create(['brand_id' => $brand->id ]);
        });

    }
}

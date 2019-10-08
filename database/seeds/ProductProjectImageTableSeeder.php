<?php

use Illuminate\Database\Seeder;

class ProductProjectImageTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //
    DB::table('product_project_image')->insert([
      ['product_id' => '1', 'project_id' => '1', 'project_image_id' => '1'], ['product_id' => '3', 'project_id' => '1', 'project_image_id' => '1'], ['product_id' => '7', 'project_id' => '1', 'project_image_id' => '1'], ['product_id' => '3', 'project_id' => '1', 'project_image_id' => '2'], ['product_id' => '7', 'project_id' => '1', 'project_image_id' => '2'], ['product_id' => '13', 'project_id' => '1', 'project_image_id' => '2'], ['product_id' => '2', 'project_id' => '1', 'project_image_id' => '2'], ['product_id' => '2', 'project_id' => '1', 'project_image_id' => '3'], ['product_id' => '4', 'project_id' => '1', 'project_image_id' => '3'], ['product_id' => '5', 'project_id' => '1', 'project_image_id' => '3'], ['product_id' => '6', 'project_id' => '1', 'project_image_id' => '3'], ['product_id' => '1', 'project_id' => '1', 'project_image_id' => '4'], ['product_id' => '3', 'project_id' => '1', 'project_image_id' => '4'], ['product_id' => '7', 'project_id' => '1', 'project_image_id' => '4'], ['product_id' => '15', 'project_id' => '1', 'project_image_id' => '4'], ['product_id' => '1', 'project_id' => '2', 'project_image_id' => '5'], ['product_id' => '2', 'project_id' => '2', 'project_image_id' => '6'], ['product_id' => '8', 'project_id' => '2', 'project_image_id' => '7'], ['product_id' => '9', 'project_id' => '2', 'project_image_id' => '8'], ['product_id' => '16', 'project_id' => '3', 'project_image_id' => '9'], ['product_id' => '9', 'project_id' => '3', 'project_image_id' => '10'], ['product_id' => '12', 'project_id' => '4', 'project_image_id' => '11'], ['product_id' => '16', 'project_id' => '4', 'project_image_id' => '11'], ['product_id' => '12', 'project_id' => '4', 'project_image_id' => '12'], ['product_id' => '16', 'project_id' => '4', 'project_image_id' => '12'], ['product_id' => '2', 'project_id' => '5', 'project_image_id' => '13'], ['product_id' => '9', 'project_id' => '5', 'project_image_id' => '14'], ['product_id' => '2', 'project_id' => '7', 'project_image_id' => '17'], ['product_id' => '9', 'project_id' => '8', 'project_image_id' => '18'], ['product_id' => '6', 'project_id' => '11', 'project_image_id' => '21'], ['product_id' => '12', 'project_id' => '12', 'project_image_id' => '22'], ['product_id' => '11', 'project_id' => '13', 'project_image_id' => '23'], ['product_id' => '19', 'project_id' => '13', 'project_image_id' => '23'], ['product_id' => '11', 'project_id' => '14', 'project_image_id' => '24'], ['product_id' => '11', 'project_id' => '15', 'project_image_id' => '25'], ['product_id' => '10', 'project_id' => '16', 'project_image_id' => '26'], ['product_id' => '17', 'project_id' => '17', 'project_image_id' => '27'], ['product_id' => '18', 'project_id' => '18', 'project_image_id' => '28'],
    ]);
  }
}

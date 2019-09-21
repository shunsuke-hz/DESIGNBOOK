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
          [
            'product_id' => '1',
            'project_id' => '1',
            'project_image_id' => '1',

          ],
          [
            'product_id' => '2',
            'project_id' => '1',
            'project_image_id' => '1',

          ],
          [
            'product_id' => '3',
            'project_id' => '1',
            'project_image_id' => '1',
          ],
          [
            'product_id' => '4',
            'project_id' => '1',
            'project_image_id' => '2',
          ],
          [
            'product_id' => '5',
            'project_id' => '1',
            'project_image_id' => '2',
          ],
          [
            'product_id' => '6',
            'project_id' => '1',
            'project_image_id' => '3',
          ],
          [
            'product_id' => '7',
            'project_id' => '1',
            'project_image_id' => '3',
          ],
          [
            'product_id' => '8',
            'project_id' => '1',
            'project_image_id' => '4',
          ],
          [
            'product_id' => '9',
            'project_id' => '2',
            'project_image_id' => '5',
          ],
          [
            'product_id' => '10',
            'project_id' => '2',
            'project_image_id' => '6',
          ],
          [
            'product_id' => '1',
            'project_id' => '2',
            'project_image_id' => '7',
          ],
          [
            'product_id' => '1',
            'project_id' => '3',
            'project_image_id' => '8',
          ],
          [
            'product_id' => '2',
            'project_id' => '3',
            'project_image_id' => '9',
          ],
          [
            'product_id' => '3',
            'project_id' => '3',
            'project_image_id' => '10',
          ],
          [
            'product_id' => '8',
            'project_id' => '4',
            'project_image_id' => '11',
          ],
          [
            'product_id' => '3',
            'project_id' => '5',
            'project_image_id' => '12',
          ],
          [
            'product_id' => '7',
            'project_id' => '5',
            'project_image_id' => '13',
          ],
          [
            'product_id' => '4',
            'project_id' => '5',
            'project_image_id' => '14',
          ],
          [
            'product_id' => '4',
            'project_id' => '6',
            'project_image_id' => '15',
          ],
          [
            'product_id' => '1',
            'project_id' => '6',
            'project_image_id' => '16',
          ],
          [
            'product_id' => '1',
            'project_id' => '6',
            'project_image_id' => '17',
          ],
          [
            'product_id' => '5',
            'project_id' => '7',
            'project_image_id' => '18',
          ],         [
            'product_id' => '2',
            'project_id' => '8',
            'project_image_id' => '19',
          ],         [
            'product_id' => '9',
            'project_id' => '9',
            'project_image_id' => '20',
          ],         [
            'product_id' => '1',
            'project_id' => '10',
            'project_image_id' => '21',
          ],
        ]);
    }
}

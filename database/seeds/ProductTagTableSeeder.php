<?php

use Illuminate\Database\Seeder;

class ProductTagTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //
    DB::table('product_tag')->insert([
      ['product_id' => '1', 'tag_id' => '532'], ['product_id' => '1', 'tag_id' => '550'], ['product_id' => '1', 'tag_id' => '552'], ['product_id' => '2', 'tag_id' => '851'], ['product_id' => '2', 'tag_id' => '852'], ['product_id' => '2', 'tag_id' => '853'], ['product_id' => '2', 'tag_id' => '883'], ['product_id' => '2', 'tag_id' => '887'], ['product_id' => '2', 'tag_id' => '886'], ['product_id' => '2', 'tag_id' => '868'], ['product_id' => '2', 'tag_id' => '869'], ['product_id' => '3', 'tag_id' => '851'], ['product_id' => '3', 'tag_id' => '852'], ['product_id' => '3', 'tag_id' => '855'], ['product_id' => '4', 'tag_id' => '636'], ['product_id' => '4', 'tag_id' => '664'], ['product_id' => '4', 'tag_id' => '666'], ['product_id' => '5', 'tag_id' => '597'], ['product_id' => '5', 'tag_id' => '598'], ['product_id' => '5', 'tag_id' => '600'], ['product_id' => '5', 'tag_id' => '604'], ['product_id' => '5', 'tag_id' => '605'], ['product_id' => '6', 'tag_id' => '532'], ['product_id' => '6', 'tag_id' => '550'], ['product_id' => '6', 'tag_id' => '553'], ['product_id' => '7', 'tag_id' => '749'], ['product_id' => '7', 'tag_id' => '750'], ['product_id' => '7', 'tag_id' => '753'], ['product_id' => '8', 'tag_id' => '532'], ['product_id' => '8', 'tag_id' => '533'], ['product_id' => '8', 'tag_id' => '534'], ['product_id' => '9', 'tag_id' => '489'], ['product_id' => '9', 'tag_id' => '498'], ['product_id' => '9', 'tag_id' => '504'], ['product_id' => '10', 'tag_id' => '489'], ['product_id' => '10', 'tag_id' => '498'], ['product_id' => '10', 'tag_id' => '503'], ['product_id' => '11', 'tag_id' => '597'], ['product_id' => '11', 'tag_id' => '604'], ['product_id' => '11', 'tag_id' => '605'], ['product_id' => '12', 'tag_id' => '597'], ['product_id' => '12', 'tag_id' => '604'], ['product_id' => '12', 'tag_id' => '605'], ['product_id' => '13', 'tag_id' => '597'], ['product_id' => '13', 'tag_id' => '604'], ['product_id' => '13', 'tag_id' => '606'],
    ]);
  }
}

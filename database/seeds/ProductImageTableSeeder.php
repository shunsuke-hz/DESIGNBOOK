<?php

use Illuminate\Database\Seeder;

class ProductImageTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //
    DB::table('product_images')->insert([
      [
        'image' => 'p1.png',
        'title' => '床',
        'explain' => 'テストです',
        'product_id' => '1',
      ],
      [
        'image' => 'ps1.jpg',
        'title' => '床1',
        'explain' => 'テストです',
        'product_id' => '1',
      ],
      [
        'image' => 'ps2.png',
        'title' => '床2',
        'explain' => 'テストです',
        'product_id' => '1',
      ],
      [
        'image' => 'p2.png',
        'title' => '天井',
        'explain' => 'テストです',
        'product_id' => '2',
      ],
      [
        'image' => 'ps3.png',
        'title' => '天井1',
        'explain' => 'テストです',
        'product_id' => '2',
      ],
      [
        'image' => 'ps4.png',
        'title' => '天井2',
        'explain' => 'テストです',
        'product_id' => '2',
      ],
      [
        'image' => 'p3.png',
        'title' => '壁',
        'explain' => 'テストです',
        'product_id' => '3',
      ],
      [
        'image' => 'ps4.jpg',
        'title' => '椅子',
        'explain' => 'テストです',
        'product_id' => '4',
      ],
      [
        'image' => 'ps5.jpg',
        'title' => '机',
        'explain' => 'テストです',
        'product_id' => '5',
      ],
      [
        'image' => 'ps6.jpg',
        'title' => '照明',
        'explain' => 'テストです',
        'product_id' => '6',
      ],
      [
        'image' => 'p4.png',
        'title' => '壁紙',
        'explain' => 'テストです',
        'product_id' => '7',
      ],
      [
        'image' => 'p5.png',
        'title' => '床ビニール',
        'explain' => 'テストです',
        'product_id' => '8',
      ],
      [
        'image' => 'ps1.jpg',
        'title' => 'フローリング',
        'explain' => 'テストです',
        'product_id' => '9',
      ],
      [
        'image' => 'p2.png',
        'title' => '化粧台',
        'explain' => 'テストです',
        'product_id' => '10',
      ],
    ]);
  }
}

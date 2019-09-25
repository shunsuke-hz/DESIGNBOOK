<?php

use Illuminate\Database\Seeder;

class ProjectImageTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('project_images')->insert([
      [
        'image' => 'home1.png',
        'title' => 'リビング',
        'explain' => 'テスト①',
        'project_id' => '1',
      ],
      [
        'image' => 'home2.png',
        'title' => 'ダイニング',
        'explain' => 'テスト②',
        'project_id' => '1',
      ],
      [
        'image' => 'home3.png',
        'title' => 'エントランス',
        'explain' => 'テスト③',
        'project_id' => '1',
      ],
      [
        'image' => 'home4.png',
        'title' => 'バスルーム',
        'explain' => 'テスト④',
        'project_id' => '1',
      ],
      [
        'image' => 'home5.png',
        'title' => '青山ビル',
        'explain' => 'テストです',
        'project_id' => '2',
      ],
      [
        'image' => 'home6.png',
        'title' => '青山ビル',
        'explain' => 'テストです',
        'project_id' => '2',
      ],
      [
        'image' => 'home7.png',
        'title' => '青山ビル',
        'explain' => 'テストです',
        'project_id' => '2',
      ],
      [
        'image' => 'home8.png',
        'title' => '外苑テラス',
        'explain' => 'テストです',
        'project_id' => '3',
      ],
      [
        'image' => 'home9.png',
        'title' => '外苑テラス',
        'explain' => 'テストです',
        'project_id' => '3',
      ],
      [
        'image' => 'home10.png',
        'title' => '外苑テラス',
        'explain' => 'テストです',
        'project_id' => '3',
      ],
      [
        'image' => 'home11.jpg',
        'title' => '外苑テラス',
        'explain' => 'テストです',
        'project_id' => '4',
      ],
      [
        'image' => 'bath1.png',
        'title' => '渋谷ビル',
        'explain' => 'テストです',
        'project_id' => '5',
      ],
      [
        'image' => 'bath2.jpg',
        'title' => '渋谷ビル',
        'explain' => 'テストです',
        'project_id' => '5',
      ],
      [
        'image' => 'bath3.jpg',
        'title' => '渋谷ビル',
        'explain' => 'テストです',
        'project_id' => '5',
      ],
      [
        'image' => 'office1.png',
        'title' => '新宿学校',
        'explain' => 'テストです',
        'project_id' => '6',
      ],
      [
        'image' => 'office2.png',
        'title' => '新宿学校',
        'explain' => 'テストです',
        'project_id' => '6',
      ],
      [
        'image' => 'office3.png',
        'title' => '新宿学校',
        'explain' => 'テストです',
        'project_id' => '6',
      ],
      [
        'image' => 'restaurant1.png',
        'title' => '新宿ガーデン',
        'explain' => 'テストです',
        'project_id' => '7',
      ],
      [
        'image' => 'shop1.png',
        'title' => '目黒テナント',
        'explain' => 'テストです',
        'project_id' => '8',
      ],
      [
        'image' => 'int1.png',
        'title' => '湯浅邸',
        'explain' => 'テストです',
        'project_id' => '9',
      ],
      [
        'image' => 'rokky1.png',
        'title' => '別荘',
        'explain' => 'テストです',
        'project_id' => '10',
      ],
    ]);
  }
}

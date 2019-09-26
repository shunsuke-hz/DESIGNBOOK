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
        // FACTORYを使用したランダムでのテストデータ作成はテストしきれないので一旦凍結
        // factory(App\Brand::class, 10)->create()->each(function ($brand){

        // });

        // ロゴ画像表示のため手動でテストデータ作成
        DB::table('brands')->insert([
            [
                'name' => '湯浅商事',
                'url' => 'https://www.yahoo.co.jp/',
                'postal_code' => '336-0967',
                'prefecture' => '12',
                'address' => 'さいたま市緑区1-1',
                'address_url' => 'https://www.yahoo.co.jp/',
                'mail_address' => 'jirudore@gmail.com',
                'phone_number' => '090-2338-1234',
                'logo_image' => 'home1.png',
                'created_at' => '2019-09-25 02:36:31',
                'updated_at' => '2019-09-25 02:36:32', 
            ],
            [
                'name' => '湯浅商事2',
                'url' => 'https://www.yahoo.co.jp/',
                'postal_code' => '336-0967',
                'prefecture' => '12',
                'address' => 'さいたま市緑区1-1',
                'address_url' => 'https://www.yahoo.co.jp/',
                'mail_address' => 'jirudore2@gmail.com',
                'phone_number' => '090-2338-1234',
                'logo_image' => 'home2.png',
                'created_at' => '2019-09-25 02:36:31',
                'updated_at' => '2019-09-25 02:36:32', 
            ],
            [
                'name' => '湯浅商事3',
                'url' => 'https://www.yahoo.co.jp/',
                'postal_code' => '336-0967',
                'prefecture' => '12',
                'address' => 'さいたま市緑区1-1',
                'address_url' => 'https://www.yahoo.co.jp/',
                'mail_address' => 'jirudore3@gmail.com',
                'phone_number' => '090-2338-1234',
                'logo_image' => 'home3.png',
                'created_at' => '2019-09-25 02:36:31',
                'updated_at' => '2019-09-25 02:36:32', 
            ],
            [
                'name' => '湯浅商事4',
                'url' => 'https://www.yahoo.co.jp/',
                'postal_code' => '336-0967',
                'prefecture' => '12',
                'address' => 'さいたま市緑区1-1',
                'address_url' => 'https://www.yahoo.co.jp/',
                'mail_address' => 'jirudore4@gmail.com',
                'phone_number' => '090-2338-1234',
                'logo_image' => 'home4.png',
                'created_at' => '2019-09-25 02:36:31',
                'updated_at' => '2019-09-25 02:36:32', 
            ],
            [
                'name' => '湯浅商事5',
                'url' => 'https://www.yahoo.co.jp/',
                'postal_code' => '336-0967',
                'prefecture' => '12',
                'address' => 'さいたま市緑区1-1',
                'address_url' => 'https://www.yahoo.co.jp/',
                'mail_address' => 'jirudore5@gmail.com',
                'phone_number' => '090-2338-1234',
                'logo_image' => 'home5.png',
                'created_at' => '2019-09-25 02:36:31',
                'updated_at' => '2019-09-25 02:36:32', 
            ],
            [
                'name' => '湯浅商事6',
                'url' => 'https://www.yahoo.co.jp/',
                'postal_code' => '336-0967',
                'prefecture' => '13',
                'address' => 'さいたま市緑区1-1',
                'address_url' => 'https://www.yahoo.co.jp/',
                'mail_address' => 'jirudore6@gmail.com',
                'phone_number' => '090-2338-1234',
                'logo_image' => 'home1.png',
                'created_at' => '2019-09-25 02:36:31',
                'updated_at' => '2019-09-25 02:36:32', 
            ],
            [
                'name' => '湯浅商事7',
                'url' => 'https://www.yahoo.co.jp/',
                'postal_code' => '336-0967',
                'prefecture' => '11',
                'address' => 'さいたま市緑区1-1',
                'address_url' => 'https://www.yahoo.co.jp/',
                'mail_address' => 'jirudore7@gmail.com',
                'phone_number' => '090-2338-1234',
                'logo_image' => 'home2.png',
                'created_at' => '2019-09-25 02:36:31',
                'updated_at' => '2019-09-25 02:36:32', 
            ],
            [
                'name' => '湯浅商事8',
                'url' => 'https://www.yahoo.co.jp/',
                'postal_code' => '336-0967',
                'prefecture' => '14',
                'address' => 'さいたま市緑区1-1',
                'address_url' => 'https://www.yahoo.co.jp/',
                'mail_address' => 'jirudore8@gmail.com',
                'phone_number' => '090-2338-1234',
                'logo_image' => 'home4.png',
                'created_at' => '2019-09-25 02:36:31',
                'updated_at' => '2019-09-25 02:36:32', 
            ],
            [
                'name' => '湯浅商事9',
                'url' => 'https://www.yahoo.co.jp/',
                'postal_code' => '336-0967',
                'prefecture' => '12',
                'address' => 'さいたま市緑区1-1',
                'address_url' => 'https://www.yahoo.co.jp/',
                'mail_address' => 'jirudore9@gmail.com',
                'phone_number' => '090-2338-1234',
                'logo_image' => 'home5.png',
                'created_at' => '2019-09-25 02:36:31',
                'updated_at' => '2019-09-25 02:36:32', 
            ],
            [
                'name' => '湯浅商事10',
                'url' => 'https://www.yahoo.co.jp/',
                'postal_code' => '336-0967',
                'prefecture' => '12',
                'address' => 'さいたま市緑区1-1',
                'address_url' => 'https://www.yahoo.co.jp/',
                'mail_address' => 'jirudore10@gmail.com',
                'phone_number' => '090-2338-1234',
                'logo_image' => 'home6.png',
                'created_at' => '2019-09-25 02:36:31',
                'updated_at' => '2019-09-25 02:36:32', 
            ],
        ]);
        factory(App\Project::class, 10)->create();
        factory(App\Product::class, 10)->create();
    }
}

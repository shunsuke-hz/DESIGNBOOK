<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'account_name' => null,
                'name' => 'テスト太郎',
                'email' => 'designbook13@gmail.com',
                'password' => '$2y$10$70zGNsvVqzE713j2VLDyhO6fRJNPuH.Q0umZUi.AiTD.H6VVBSN36',
                'sex' => '1',
                'phone_number' => '090-1234-5678',
                'birthday' => null,
                'belonging_to' => 'DesignBook',
                'profile_image' => null,
                'admin_user' => '1',
                'brand_id' => '1',
                'email_verified' => '0',
                'email_verify_token' => 'ZGVzaWduYm9vazEzQGdtYWlsLmNvbQ==',
                'status' => '1',
                'remember_token' => null,
                'created_at' => '2019-09-27 02:50:30',
                'updated_at' => '2019-09-27 02:50:30',
            ],
        ]);
    }
}

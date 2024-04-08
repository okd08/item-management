<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //DB操作
use Illuminate\Support\Facades\Hash; //ハッシュ化

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => '管理用',
                'email' => 'kanri@kanri.com',
                'password' => Hash::make('password123'),
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'name' => '管理用2',
                'email' => 'kanri2@kanri.com',
                'password' => Hash::make('password123'),
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'name' => '管理用3',
                'email' => 'kanri3@kanri.com',
                'password' => Hash::make('password123'),
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'name' => 'テストアカウント',
                'email' => 'test@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2024/01/01 11:11:11'
            ],
        ]);
    }
}

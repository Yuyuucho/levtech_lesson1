<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => '麻雀の勝ちかた',
            'body' => '一発を狙おう',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'category_id' => 1
        ]);
        DB::table('posts')->insert([
            'title' => 'スマブラの勝ち方',
            'body' => 'ガーキャン上B',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'category_id' => 2
        ]);
    }
}

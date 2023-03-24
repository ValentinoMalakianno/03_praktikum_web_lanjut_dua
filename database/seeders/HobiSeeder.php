<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hobis')->insert([
            'title' => 'Sepak bola',
            'slug' => 'sepak bola',
            'content' => 'saya sangat suka bermain sepakbola.karena saya dari kecil sudah ikut SSB sepakbola.',
            'draft' => 0
        ]);
    }
}

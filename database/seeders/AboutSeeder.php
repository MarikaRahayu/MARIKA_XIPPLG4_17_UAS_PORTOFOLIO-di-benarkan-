<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('abouts')->insert([
            'title' => 'Tentang Saya',
            'description' => 'Saya adalah web developer.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
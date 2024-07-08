<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContentImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'image' => 'asd',
                'type' => 'Hero Image 1'
            ],
            [
                'image' => 'asd',
                'type' => 'Hero Image 2'
            ],
            [
                'image' => 'asd',
                'type' => 'About Image'
            ],
        ];
        DB::table('content_images')->insert($data);
    }
}

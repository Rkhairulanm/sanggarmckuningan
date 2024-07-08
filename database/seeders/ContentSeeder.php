<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $data = [
            [
                'content' => 'asd',
                'type' => 'Hero Title Beranda'
            ],
            [
                'content' => 'asd',
                'type' => 'About Section'
            ],
        ];
        $das = [
            [
                'content' => 'asd',
                'type' => 'Address'
            ],
            [
                'content' => 'asd',
                'type' => 'Phone Number'
            ],
            [
                'content' => 'asd',
                'type' => 'Email'
            ],
            [
                'content' => 'asd',
                'type' => 'Instagram'
            ],
            [
                'content' => 'asd',
                'type' => 'Youtube'
            ],
        ];

        DB::table('infos')->insert($das);
    }
}

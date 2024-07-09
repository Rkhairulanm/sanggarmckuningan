<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KeywordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mcServices = [
            ['name' => 'sanggar mc'],
            ['name' => 'sanggar mc kuningan'],
            ['name' => 'jasa mc profesional'],
            ['name' => 'jasa mc kuningan'],
            ['name' => 'mc wedding jakarta'],
            ['name' => 'mc wedding'],
            ['name' => 'mc wedding bandung'],
            ['name' => 'mc wedding surabaya'],
            ['name' => 'mc wedding bali'],
            ['name' => 'mc wedding malang'],
            ['name' => 'mc wedding jogja'],
            ['name' => 'mc wedding medan'],
            ['name' => 'mc wedding jkt'],
            ['name' => 'mc wedding solo'],
            ['name' => 'mc wedding bekasi'],
            ['name' => 'mc wedding sukabumi'],
            ['name' => 'mc wedding indonesia'],
            ['name' => 'mc wedding bdg'],
            ['name' => 'mc pernikahan'],
            ['name' => 'mc pernikahan bandung'],
            ['name' => 'mc pernikahan jakarta'],
            ['name' => 'mc pernikahan tradisional'],
            ['name' => 'jasa mc'],
            ['name' => 'màsterofceremony'],
            ['name' => 'mc akad'],
            ['name' => 'mc akad nikah'],
            ['name' => 'mc akad resepsi'],
            ['name' => 'mc akad bandung'],
        ];

        DB::table('keywords')->insert($mcServices);
    }
}

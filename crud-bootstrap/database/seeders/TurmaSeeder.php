<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TurmaSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                "ano" => "2024",
                "curso_id" => 1,
            ],
            [
                "ano" => "2025",
                "curso_id" => 2,
            ],
        ];

        DB::table('turmas')->insert($data);
    }
}

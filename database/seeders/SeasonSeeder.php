<?php

namespace Database\Seeders;

use App\Models\Season;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        Season::create([
            'name'=>'2023',
            'dateinit'=>'2023-01-01',
            'dateout'=>'2023-12-31',
        ]);
        Season::create([
            'name'=>'2024',
            'dateinit'=>'2024-01-01',
            'dateout'=>'2024-12-31',
        ]);
        Season::create([
            'name'=>'2025',
            'dateinit'=>'2025-01-01',
            'dateout'=>'2025-12-31',
        ]);
    }
}

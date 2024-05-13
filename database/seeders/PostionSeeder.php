<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Position::create([
            'name'=>'ARQUERO'
        ]);
        Position::create([
            'name'=>'DEFENSA'
        ]);
        Position::create([
            'name'=>'CARRILERO'
        ]);
        Position::create([
            'name'=>'MEDIOCAMPISTA'
        ]);
        Position::create([
            'name'=>'DELANTERO'
        ]);
        Position::create([
            'name'=>'DIRECTOR TÉCNICO'
        ]);
        Position::create([
            'name'=>'ASISTENTE TÉCNICO'
        ]);
        Position::create([
            'name'=>'UTILERO'
        ]);
    }
}

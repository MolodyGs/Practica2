<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        db::table('users')->insert([
            'name' => 'Ignacio',
            'lastname' => 'Molina',
            'email' => 'ignacio.molina@alumnos.ucn.cl',
            'city' => 'Antofagasta',
            'country' => 'Chile',
            'summary' => 'Estudiante de IenCI en la UCN',
            'frameworks' => json_encode([
                ['name' => 'laravel', 'level' => "beginner",'year' => '2023'], 
                ['name' => 'react-native', 'level' => "beginner", 'year' => '2023']
            ]),
            'hobbies' => json_encode([
                ['name' => 'Piano', 'description' => "Me gusta componer"], 
                ['name' => 'Blender', 'description' => "Realizo diseños en 3D"]
            ]),
            'password' => bcrypt('1234'),
        ]);
    }
}

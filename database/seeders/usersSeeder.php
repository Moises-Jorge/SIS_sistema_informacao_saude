<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nome' => 'Moises Jorge',
            'email' => 'mj@gmail.com',
            'password' => bcrypt('000000'),
            'sexo' => 'Masculino',
            'tipo_utilizador' => 1,
        ]);
    }
}

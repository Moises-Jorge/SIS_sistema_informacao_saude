<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'password' => Hash::make('000000'),
            'sexo' => 'Masculino',
            'numero_utilizador'=>"123456",
            'tipo_utilizador' => 1,
        ]);
    }
}

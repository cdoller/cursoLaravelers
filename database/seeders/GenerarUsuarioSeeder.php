<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class GenerarUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contraseña = "admin1234";
        $user = new User([
            "email" => "admin@gmail.com",
            "password" => Hash::make($contraseña),
            "name" => "Administrador",
        ]);
        $user->saveOrFail();
    }
}

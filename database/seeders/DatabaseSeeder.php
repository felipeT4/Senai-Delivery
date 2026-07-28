<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(
            [
<<<<<<< HEAD
                UsuarioSeeder::class,
                CategoriaSeeder::class
=======
                UsuarioSeeder::class
>>>>>>> refs/remotes/origin/main
            ]
            );
    }
}

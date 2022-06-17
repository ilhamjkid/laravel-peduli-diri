<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nik' => 1234567812345678,
            'nama' => 'Ilham Jaya Kusuma',
            'password' => bcrypt('12345678'),
            'is_admin' => true,
            'remember_token' => Str::random(10),
        ]);
        User::factory(2)->create();
        Note::factory(20)->create();
    }
}

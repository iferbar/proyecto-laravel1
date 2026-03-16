<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Arr;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear un admin
        $user = User::create([
            'name' => 'admin',
            'email'=> 'a@a.com',
            'password'=> bcrypt('12345678')
        ]);
        $user -> assignRole('admin');
        // Crear 20 teachers
        $user::factory(20)->create()->each(function ($user) {
            $user->department= Arr::random(config('departments'));
            $user->save();
            $user->assignRole('teacher');
        });
        // Crear 50 students
        $user::factory(50)->create()->each(function ($user) {
            $user->assignRole('student');
        });
        // Crear 20 registered
        $user::factory(20)->create()->each(function ($user) {
            $user->assignRole('registered');
        });
    }
}

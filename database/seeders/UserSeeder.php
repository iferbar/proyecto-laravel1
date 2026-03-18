<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = User::create([
            "name"=>"admin",
            "email"=>"a@a.com",
            "password"=>bcrypt("12345678"),

        ]);
        $user->assignRole("admin");

        //20 profesores
        User::factory()->count(20)->create()->each(function ($user) {
            $department = Arr::random(config('departments'));
            $user->department= $department;
            $user->save();
            $user->assignRole("teacher");
        });
        User::factory()->count(20)->create()->each(function ($user) {
            $user->assignRole("student");
        });
        User::factory()->count(20)->create()->each(function ($user) {
            $user->assignRole("guest");
        });
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i<=5; $i++) {
           DB::table('students')->insert([
             'student_id' => Str::uuid(),
             'name' => $faker->name,
             'email'=> $faker->unique()->safeEmail,
             'password' => Hash::make('password'),
             'created_at' => now(),
             'updated_at' => now()
           ]);
        }
    }
}

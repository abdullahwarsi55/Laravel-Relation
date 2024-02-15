<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $faker=Faker::create();
        foreach (range(1,10) as $value) {
            DB::table('users')->insert([
                'name'=>$faker->name(),
                'email'=>$faker->unique()->safeEmail(),
                'email_verified_at'=>$faker->dateTime($max = 'now', $timezone = null),
                'password'=>Hash::make($faker->password()),
                'created_at'=>$faker->dateTime($max = 'now', $timezone = null),
                'updated_at'=>$faker->dateTime($max = 'now', $timezone = null),
    
            ]);
            
        }
    }

}


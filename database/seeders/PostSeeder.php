<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $faker=Faker::create();
        foreach (range(1,2) as $value) {
            DB::table('posts')->insert([
                'title'=>$faker->jobTitle(),
                'description'=>$faker->city(),
                'user_id'=>'8',
                'created_at'=>$faker->dateTime($max = 'now', $timezone = null),
                'updated_at'=>$faker->dateTime($max = 'now', $timezone = null),
    
            ]);
            foreach (range(2,5) as $value) {
                DB::table('posts')->insert([
                    'title'=>$faker->jobTitle(),
                    'description'=>$faker->city(),
                    'user_id'=>'9',
                    'created_at'=>$faker->dateTime($max = 'now', $timezone = null),
                    'updated_at'=>$faker->dateTime($max = 'now', $timezone = null),
        
                ]);
                foreach (range(5,10) as $value) {
                    DB::table('posts')->insert([
                        'title'=>$faker->jobTitle(),
                        'description'=>$faker->city(),
                        'user_id'=>'6',
                        'created_at'=>$faker->dateTime($max = 'now', $timezone = null),
                        'updated_at'=>$faker->dateTime($max = 'now', $timezone = null),
            
                    ]);
            
        }
    }
        }
    }
}
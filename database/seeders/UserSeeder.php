<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

$faker=Faker::create();
for  ( $i=1;  $i<95000;  $i++) {
    $user = User::create([
        'name' => $faker->name,
        'email' => $faker->email,



    ]);

   }
   }
   }

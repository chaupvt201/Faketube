<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder; 
use App\Models\Channel; 
use Faker\Factory as Faker;

class ChannelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            Channel::create([
                'channelname' => $faker->name(),
                'description' => $faker->paragraph(3,true),
                'Subscriberscount' => $faker->numberBetween($min = 1, $max = 1000),
                'url' => $faker->url()
            ]);
        }
    }
}

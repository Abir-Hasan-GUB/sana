<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            Contact::create([
                'fullname' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'industry' => $faker->word,
                'message' => $faker->sentence,
                'is_seen' => $faker->boolean,
            ]);
        }
    }
}

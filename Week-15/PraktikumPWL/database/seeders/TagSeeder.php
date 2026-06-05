<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            'laravel 11',
            'laravel 12',
        ];

        foreach ($tags as $name) {
            Tag::firstOrCreate(['name' => $name]);
        }
    }
}

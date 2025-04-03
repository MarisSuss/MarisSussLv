<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title_en' => 'First Post',
            'content_en' => 'This is the content of the first post in English.',
            'title_lv' => 'Pirmais ieraksts',
            'content_lv' => 'Šis ir pirmā ieraksta saturs latviski.',
        ]);
    }
}

<?php

namespace Database\Seeders;
// database/seeders/BlogSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    public function run()
    {
        Blog::create([
            'title' => 'Demo Post 1',
            'content' => 'This is the content of the first demo post.',
            'category' => 'Category A',
            'img' => 'gambar.jpg',

        ]);

        Blog::create([
            'title' => 'Demo Post 2',
            'content' => 'This is the content of the second demo post.',
            'category' => 'Category B',
            'img' => 'gambar.jpg',
        ]);

        // Tambahkan postingan blog lainnya di sini
    }
}

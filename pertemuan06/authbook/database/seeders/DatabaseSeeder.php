<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. User Role-Based Access
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'Staff User',
            'email' => 'staff@example.com',
            'role' => 'staff',
        ]);

        User::factory()->create([
            'name' => 'Viewer User',
            'email' => 'viewer@example.com',
            'role' => 'viewer',
        ]);

        // 2. Buat Kategori Contoh
        $categories = collect(['Fiksi', 'Sains', 'Teknologi', 'Sejarah', 'Komik'])->map(function ($name) {
            return Category::create(['name' => $name]);
        });

        // 3. Authors & Books dengan Relasi Category
        $authors = Author::factory(10)->create();

        Book::factory(50)->create([
            'author_id' => fn() => $authors->random()->id,
        ])->each(function ($book) use ($categories) {
            $book->categories()->attach($categories->random(rand(1, 2))->pluck('id'));
        });
    }
}
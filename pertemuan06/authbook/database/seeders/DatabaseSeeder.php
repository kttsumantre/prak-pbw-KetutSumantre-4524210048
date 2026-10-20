<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // User Admin Filament
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
        ]);

        // Buat 10 Authors
        $authors = Author::factory(10)->create();

        // Buat 50 Books dengan random author
        Book::factory(50)->create([
            'author_id' => fn() => $authors->random()->id,
        ]);
    }
}
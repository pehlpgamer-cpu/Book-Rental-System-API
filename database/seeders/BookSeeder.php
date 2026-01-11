<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    // php artisan migrate:refresh --seed

    // php artisan db:seed --class=BookSeeder
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'clean code',
            'genre' => 'programming',
            'author' => 'joe',
        ]);

        Book::create([
            'title' => 'refactoring UI',
            'genre' => 'programming',
            'author' => 'adam & steve',
        ]);

        Book::create([
            'title' => 'atomic habits',
            'genre' => 'self-improvement',
            'author' => 'james clear',
        ]);
        Book::create([
            'title' => 'overcoming gravity',
            'genre' => 'fitness',
            'author' => 'bro',
        ]);
        Book::create([
            'title' => 'the practicing stoic',
            'genre' => 'philosophy',
            'author' => 'chad',
        ]);
        Book::create([
            'title' => 'the art of focus',
            'genre' => 'self-improvement',
            'author' => 'dan koe',
        ]);
        
        

    }
}

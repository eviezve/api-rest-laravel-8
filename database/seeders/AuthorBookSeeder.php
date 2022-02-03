<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('author_book')->insert(
            [
                'author_id' => Author::select('id')->orderByRaw("RAND()")->first()->id,
                'book_id' => Book::select('id')->orderByRaw("RAND()")->first()->id,
            ]
        );
        DB::table('author_book')->insert(
            [
                'author_id' => Author::select('id')->orderByRaw("RAND()")->first()->id,
                'book_id' => Book::select('id')->orderByRaw("RAND()")->first()->id,
            ]
        );
        DB::table('author_book')->insert(
            [
                'author_id' => Author::select('id')->orderByRaw("RAND()")->first()->id,
                'book_id' => Book::select('id')->orderByRaw("RAND()")->first()->id,
            ]
        );
        DB::table('author_book')->insert(
            [
                'author_id' => Author::select('id')->orderByRaw("RAND()")->first()->id,
                'book_id' => Book::select('id')->orderByRaw("RAND()")->first()->id,
            ]
        );
        DB::table('author_book')->insert(
            [
                'author_id' => Author::select('id')->orderByRaw("RAND()")->first()->id,
                'book_id' => Book::select('id')->orderByRaw("RAND()")->first()->id,
            ]
        );
        DB::table('author_book')->insert(
            [
                'author_id' => Author::select('id')->orderByRaw("RAND()")->first()->id,
                'book_id' => Book::select('id')->orderByRaw("RAND()")->first()->id,
            ]
        );
        DB::table('author_book')->insert(
            [
                'author_id' => Author::select('id')->orderByRaw("RAND()")->first()->id,
                'book_id' => Book::select('id')->orderByRaw("RAND()")->first()->id,
            ]
        );
        DB::table('author_book')->insert(
            [
                'author_id' => Author::select('id')->orderByRaw("RAND()")->first()->id,
                'book_id' => Book::select('id')->orderByRaw("RAND()")->first()->id,
            ]
        );
        DB::table('author_book')->insert(
            [
                'author_id' => Author::select('id')->orderByRaw("RAND()")->first()->id,
                'book_id' => Book::select('id')->orderByRaw("RAND()")->first()->id,
            ]
        );
        DB::table('author_book')->insert(
            [
                'author_id' => Author::select('id')->orderByRaw("RAND()")->first()->id,
                'book_id' => Book::select('id')->orderByRaw("RAND()")->first()->id,
            ]
        );
    }
}

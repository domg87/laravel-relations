<?php

use Illuminate\Database\Seeder;
use App\Comic;
use App\Author;
use Illuminate\Support\Facades\Auth;

class UpdateComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = Comic::all();

        foreach($comics as $comic){

            if($comic->author_id == NULL) {
                $author = Author::inRandomOrder()->first();

                $comic->author_id = $author->id;

                $comic->update();
            }
        }
    }
}

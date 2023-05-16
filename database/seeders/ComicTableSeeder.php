<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $res = config('comics');

        foreach($res as $item){



            $newComic = new Comic();
            $newComic->title=$item['title'];
            $newComic->description=$item['description'];
            $newComic->thumb=$item['thumb'];
            $newComic->price = $item['price'];
            $newComic->series=$item['series'];
            $newComic->sale_date=$item['sale_date'];
            $newComic->type=$item['type'];
            $newComic->save();
        }

       

    }
}

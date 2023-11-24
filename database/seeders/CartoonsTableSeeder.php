<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cartoon;
use Illuminate\Support\Arr;

class CartoonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_string = file_get_contents("https://api.sampleapis.com/cartoons/cartoons2D");

        $data = json_decode($data_string, true);
        foreach($data as $item){
            $new_cartoon = new Cartoon();
            $new_cartoon->title = $item["title"];
            $new_cartoon->slug = Cartoon::generateSlug($item["title"]);
            $new_cartoon->year = $item["year"];
            $new_cartoon->creator = Arr::join($item["creator"], ", ");
            $new_cartoon->rating = $item["rating"];
            $new_cartoon->genre = Arr::join($item["genre"], ", ");
            $new_cartoon->runtime_in_minutes = $item["runtime_in_minutes"];
            $new_cartoon->episodes = $item["episodes"];
            $new_cartoon->image = $item["image"];

            $new_cartoon->save();
        }
    }
}

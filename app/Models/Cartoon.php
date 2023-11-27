<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Cartoon extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = [
        'title',
        'slug',
        'year',
        'creator',
        'rating',
        'genre',
        'runtime_in_minutes',
        'episodes',
        'image'
    ];

    public static function generateSlug($title)
    {
=======
    protected $fillable=[
        "title",
        "slug",
        "year",
        "creator",
        "rating",
        "genre",
        "runtime_in_minutes",
        "episodes",
        "image"
    ];

    public static function generateSlug($title){
>>>>>>> 6d7363966d2f402269186b579631dba990d20d7f
        $slug = Str::slug($title, "-");
        $original_slug = $slug;
        $exists = Cartoon::where("slug", $slug)->first();
        $c = 1;
        while ($exists) {
            $slug = $original_slug . "-" . $c;
            $exists = Cartoon::where("slug", $slug)->first();

            $c++;
        }
        return $slug;
    }
}

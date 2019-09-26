<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    static $num = 1;
    return [
        'title'=> $faker->word(),
        'model_number'=> $faker->ean8,
        'top_image'=> $faker->image,
        'explain'=> $faker->realText,
        'is_accepted' => "1",
        'thumbnail_id' => "1",
        'brand_id' => $num++
    ];
});

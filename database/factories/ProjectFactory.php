<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'title'=> $faker->word(),
        'top_image'=> $faker->image,
        'explain'=> $faker->realText,
        'postal_code' => $faker->postcode,
        'prefecture' => $faker->numberBetween(1, 47),
        'address' => $faker->address,
        'address_url' => $faker->url,
        'is_accepted' => "1",
        'thumbnail_id' => "1",
    ];
});

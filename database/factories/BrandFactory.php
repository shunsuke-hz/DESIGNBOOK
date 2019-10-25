<?php

use Faker\Generator as Faker;

$factory->define(App\Brand::class, function (Faker $faker) {
  return [
    'name' => $faker->word(),
    'url' => $faker->url,
    'postal_code' => $faker->postcode,
    'prefecture' => $faker->numberBetween(1, 47),
    'address' => $faker->address,
    'profile' => $faker->url,
    'mail_address' => $faker->email,
    'phone_number' => $faker->phoneNumber,
    'logo_image' => $faker->image,
  ];
});

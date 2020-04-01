<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'id'=> $faker->randomNumber(8),
        'gender'=>'not_specified',
        'name'=>$faker->firstName('male'),
        'surname'=>$faker->lastName,
        'address'=>$faker->address,
        'post_code' => $faker->postcode,
        'city'=>$faker->city,
        'country'=>$faker->country,
        'phone'=>$faker->$faker->unique()->phoneNumber,
        'email'=>$faker->$faker->unique()->safeEmail,
        'registered_at'=>now()
    ];
});

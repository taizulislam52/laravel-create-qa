<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(Question::class, function (Faker $faker) {
    $user_id= DB::Table('users')->pluck('id')->all();
    return [
        'user_id'=>$faker->randomElement($user_id),
        'title'=>rtrim($faker->sentence(rand(5,12)),"."),
        'body'=>$faker->paragraphs(rand(5,7),true),
        'views'=>rand(0,10),
        'answers'=>rand(0,10),
        'votes'=>rand(-3,10),
    ];
});

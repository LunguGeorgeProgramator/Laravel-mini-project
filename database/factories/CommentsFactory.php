<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'user_id' => factory('App\User')->create()->id,
        'post_id' => factory('App\Post')->create()->id,
        'message' => $faker->text,
        'commentable_id' => factory('App\Comment')->create()->id
    ];
});
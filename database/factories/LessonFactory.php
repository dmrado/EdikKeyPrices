<?php
/**
 * Created by PhpStorm.
 * User: dmrado
 * Date: 2019-01-27
 * Time: 17:32
 */
use Faker\Generator as Faker;

    $factory->define(App\Lesson::class, function (Faker $faker) {
        return [
            'name' => $faker->name,
            'description' => $faker->text,
            'duration' => rand(60, 90)
        ];
    });
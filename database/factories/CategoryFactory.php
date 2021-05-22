<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElements(
            [
                'Giày thể thao/Sneaker nữ',
                'Giày cao gót',
                'Giày đế xuồng',
                'Bốt',
                'Sandals nữ',
                'Guốc,Dép',
                'Giày thể thao/Sneaker nam',
                'Giày lười',
                'Giày tây',
                'Sandals nam',
                'Dép nam',
            ]
        )[0],
        'description' => $faker->text($maxNbChars = 200),
    ];
});

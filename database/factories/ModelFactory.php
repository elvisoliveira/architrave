<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

use Ramsey\Uuid\Uuid;

/**
 * This will define the factory of the role insertion
 */
$factory->define(App\Role::class, function(){ return []; });

/**
 * This will define the factory of the group insertion
 */
$factory->define(App\Group::class, function($faker){
    return [
        'name' => $faker->lexify('??????') // will generate random 6 characters
    ];
});

/**
 * This will define the factory of the asset insertion
 */
$factory->define(App\Asset::class, function($faker){
    return [
        'name' => $faker->lexify('??????'), // will generate random 6 characters
        'group_id' => function(){
            return App\Group::find(mt_rand(1, 100))->id;
        }
    ];
});

/**
 * This will define the factory of the user insertion
 */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->lexify('??????'),
        'last_name' => $faker->lexify('??????'),
        'email' => $faker->email,
        'group_id' => function(){
            return App\Group::find(mt_rand(1, 100))->id;
        },
        'role_id' => function(){
            return App\Role::find(mt_rand(1, 2))->id;
        },
        'api_token' => Uuid::uuid4()->toString()
    ];
});

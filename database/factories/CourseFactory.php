<?php
namespace App\Models;
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    $kitIds = DB::table('kits')->pluck('id')->toArray();

    return [
        'name' => $this->faker->unique()->sentence(4),
        'description' => $this->faker->paragraph(3),
        'kit_id' => $this->faker->randomElement($kitIds),
    ];
});

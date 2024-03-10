use Faker\Generator as Faker;

$factory->define(App\Models\Team::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
        'city_id' => factory(App\Models\City::class)->create()->id,
    ];
});

// teams.php
use Faker\Generator as Faker;

$factory->define(App\Models\City::class, function (Faker $faker) {
    return [
        'name' => $faker->city,
    ];
});
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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Program::class, function (Faker\Generator $faker) {

    $price = $faker->randomDigitNotNull * 100000;

    return [
        'judul' => $faker->sentence(2),
        'deskripsi' => $faker->sentence,
        'harga' => $price,
        'dp' => $price * 0.3,
    ];
});

$factory->define(App\Materi::class, function(Faker\Generator $faker){

    return [
        "program_id" => App\Program::all()->random()->id,
        "judul" => "Materi ".$faker->sentence(3),
    ];
});


$factory->define(App\Bab::class, function(Faker\Generator $faker){
    
    return [
        "materi_id" => App\Materi::all()->random()->id,
        "judul" => "Bab ".$faker->sentence(3),
        "rangkuman" => $faker->realText(100, 2)
    ];
});

$factory->define(App\Pengumuman::class, function(Faker\Generator $faker){
    
    return [
        "judul" => $faker->sentence(3),
        "pesan" => $faker->realText(100, 2)
    ];
});

$factory->define(App\PengumumanUser::class, function(Faker\Generator $faker){
    return [
        "pengumuman_id" => App\Pengumuman::all()->random()->id,
        "user_id" => App\User::all()->random()->id,
        "unread" => rand(0,1)
    ];
});

$factory->define(App\Beasiswa::class, function(Faker\Generator $faker){
    return [
        "judul" => $faker->sentence(3),
        "subtitle" => $faker->sentence(7),
        "deskripsi" => $faker->realText(100, 2)
    ];
});

$factory->define(App\Grade::class, function(Faker\Generator $faker){
    $grade_jurusan = array();
    for($i=0; $i<=rand(3,9); $i++){
        $grade_jurusan[$i] = array(
            "jurusan" => "jurusan ".$i,
            "grade" => rand(55, 100),
        );
    }
    return [
        "kampus" => $faker->sentence(3),
        "grade_jurusan" => json_encode($grade_jurusan)
    ];
});
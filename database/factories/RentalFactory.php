<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rental;
use App\RentalStatus;
use App\Vehicle;
use App\Customer;
use Faker\Generator as Faker;

$factory->define(Rental::class, function (Faker $faker) {
    return [
        'rental_status_id'=> RentalStatus::all()->random()->id,
        'vehicle_id'=>Vehicle::all()->random()->id,
        'customer_id'=>Customer::all()->random()->id,
        'from'=>$faker->dateTime(),
        'to'=>$faker->dateTime(),
    ];
});

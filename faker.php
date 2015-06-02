<?php


require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

foreach (range(1, 100) as $x) {
	echo $faker->lastname.'<br>';
}
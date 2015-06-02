<?php 

require_once '../../vendor/autoload.php';

$host = "localhost";
$usu = "root";
$pass = "s1st3m45";
$db = "UAP";


$cn = new mysqli($hots,$usu,$pass,$db);

$faker = Faker\Factory::create();

foreach (range(1, 100) as $x) {
	$sql = "insert into personas values(0,'".$faker->firstName."','".$faker->lastname."','".$x."','".$faker->date."')";
	$cn->query($sql);	
}


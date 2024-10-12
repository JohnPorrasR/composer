<?php

require_once 'vendor/autoload.php';


$html = '';

$faker = Faker\Factory::create('es_PE');
foreach (range(1, 40000) as $x) {
	if($x % 2 == 0){
		$html .= "insert into t_mae_personas (x_nombres, x_ape_pat, x_ape_mat, x_tipo_doc, x_num_doc, x_celular, x_direccion, m_id_distrito, m_estado) values ('".$faker->firstNameFemale."','".$faker->lastname."','".$faker->lastname."','DNI','".$faker->dni."',".$faker->numberBetween(900000000, 999999999).",'".$faker->city."','".$faker->numberBetween(1, 30)."', 1); </br>";
	} else {
		$html .= "insert into t_mae_personas (x_nombres, x_ape_pat, x_ape_mat, x_tipo_doc, x_num_doc, x_celular, x_direccion, m_id_distrito, m_estado) values ('".$faker->firstNameMale."','".$faker->lastname."','".$faker->lastname."','DNI','".$faker->dni."',".$faker->numberBetween(900000000, 999999999).",'".$faker->city."','".$faker->numberBetween(1, 30)."', 1); </br>";
	}
}

echo $html;


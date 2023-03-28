<?php

//model 1
//$cars = array("Volvo","BMW","Toyota");


//model 2
$cars[0] = "Volvo";

$cars[1] = "BMW";

$cars[2] = "Toyota";

//pertukaran data menggunakan json
header("Content-type: application/json; charset=UTF-8");

echo json_encode($cars);


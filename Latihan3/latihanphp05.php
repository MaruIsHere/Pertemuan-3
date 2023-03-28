<?php




//array associative


$age = array("peter" => "35", "ben" => "37", "joe" => "43");

header("Content-type: application/json; charset=UTF-8");

echo json_encode($age);

<?php


$list = array(

    array(" Ardika", "22347215","Denpasar"),
    array("Wahyu Hidayat","22347067","Malang"),
    array("Santi Kirana","22347342","Surabaya"),
    array("Zizi","22347112","Florest")

);

header("Content-type: application/json; charset=UTF-8");

echo json_encode($list);

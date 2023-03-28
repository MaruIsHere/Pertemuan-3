<?php


$list = array(

    array(" Ardika", "22347215","Denpasar"),
    array("Wahyu Hidayat","22347067","Malang"),
    array("Santi Kirana","22347342","Surabaya"),
    array("Zizi","22347112","Florest")

);

//header("Content-type: application/json; charset=UTF-8");

//echo json_encode($list);

echo"Nama: ",$list[0][0],"Nim: ",$list[0][1],"Tinggal: ",$list[0][2];
echo"<br/>";
echo"Nama: ",$list[1][0],"Nim: ",$list[1][1],"Tinggal: ",$list[1][2];



<?php 
include_once 'Tanulo.php';
$tanulo = new Tanulo ([
    "nev" => "Farkas",
    "kor" => "55",
    "nem" => "férfi"

])

$info = new InfosOsztaly([
    "gepterem" => "hármas",
    "nev" => "Farkas",
    "kor" => "55",
    "nem" => "férfi"
])
$koz = new GazdOsztaly([
    "adoszam" => "464654",
    "nev" => "Farkas",
    "kor" => "55",
    "nem" => "férfi"
])
$info -> setgepterem("tisza terem");
echo $info-> gepterem();

$info -> setadoszam("99999999");
echo $info-> adoszam();



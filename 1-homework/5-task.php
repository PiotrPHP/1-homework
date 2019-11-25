<?php


$bmw = [
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "years" => "2015"
];

$toyota = [
    "model" => "Auris",
    "speed" => 100,
    "doors" => 5,
    "years" => "2010"
];

$opel = [
    "model" => "Corsa",
    "speed" => 70,
    "doors" => 2,
    "years" => "2004"
];

$cars = [
    'bmw' => $bmw,
    'toyota' => $toyota,
    'opel' => $opel
];

foreach ($cars as $name => $value) {
    echo "CAR $name<br> $value[model]   $value[speed]   $value[doors]   $value[years]<br><br>";
};

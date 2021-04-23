<pre>
<?php

$bmv = [
    'model' => 'X5',
    'speed'=> 120,
    'doors'=> 5,
    'year'=> 2015,
];
$toyota = [
    "model" => 'RAW4',
    "speed" => 130,
    "doors" => 5,
    "year" => 2012,
];
$opel = [
    "model" => 'Astra',
    "speed" => 105,
    "doors" => 4,
    "year" => 2017,
];

$cars = ["bmw" => $bmv, "toyota" => $toyota, "opel" => $opel];

$name = 'bmw';
echo 'CAR ', $name, "\n";
echo $bmv['model'], ' ', $bmv['speed'], ' ', $bmv['doors'], ' ', $bmv['year'], "\n";

$name = 'toyota';
echo "\n", 'CAR ', $name, "\n";
echo $toyota['model'], ' ', $toyota['speed'], ' ', $toyota['doors'], ' ', $toyota['year'], "\n";

$name = 'opel';
echo "\n", 'CAR ', $name, "\n";
echo $opel['model'], ' ', $opel['speed'], ' ', $opel['doors'], ' ', $opel['year'], "\n";


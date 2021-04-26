<?php

/**Задание; 1;**/
//function task1 ($bmv, $print = false)
//{
//    $bmv = [
//        'model' => 'X5', 'speed'=> 120, 'doors'=> 5, 'year'=> 2015,
//    ];
//    if ($print) {
//        return $bmv;
//    } else {
//        echo $bmv['model'], '<p>', $bmv['speed'], '<p>', $bmv['doors'], '<p>', $bmv['year'], "\n";
//    }
//}
//
//$result = task1('bmv');
//var_dump($result);

/**Задание; 2;**/
//function task2($oper)
//{
//    $args = func_get_args();
//    $result = 0;
//    if ($oper == '+') {
//        for ($i = 1; $i < sizeof($args); $i++) {
//            $result += $args[$i];
//        }
//    }
//    return $result;
//}
//
//echo task2('+', rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10));

/**Задание; 3;**/
//function task3($oper, $bmv)
//{
//    $oper = rand(1,10);
//    $bmv = $oper;
//    $args = func_get_args();
//    $result = 0;
//    if ($oper == "int" && $bmv == "int") {
//        echo "<table border='1'>";
//        for ($i = 1; $i < sizeof($args); $i++) {
//            echo "<tr>";
//            for ($i = 1; $i < sizeof($args); $i++) {
//                $n = $oper * $bmv;
//                echo "<td> $n </td>";
//            }
//            echo "</tr>" , "\n";
//            $result += $args[$i];
//        }
//        echo "</table>";
//    }
//    return $result;
//}
//
//echo task3();

/**Задание; 4;**/
//echo time();
//echo '<br>';
//echo date('d.m.Y H:i');
//echo '<br>';
//$unixtime = new DateTime('1970-01-01');
//echo $unixtime->format('d.m.Y H:i:s');

/**Задание; 5;**/
//echo 'Карл у Клары украл Кораллы';
//echo '<br>';
//$string1 = 'Карл у Клары украл Кораллы';
//$subString = 'К';
//echo '<br>';
//var_dump(['str_replace' => str_replace('К', '', $string1, $count1)]);
//echo '<br>';
//var_dump($count1);
//echo '<br>';
//echo 'Две бутылки лимонада';
//echo '<br>';
//$string2 = 'Две бутылки лимонада';
//$subString = 'Три';
//echo '<br>';
//var_dump(['str_replace' => str_replace('Две', 'Три', $string2, $count2)]);
//echo '<br>';
//var_dump($count2);

/**Задание; 6;**/

$fp = fopen('test.txt', 'w');
$test = ['Hello again!'];
foreach ($test as $str) {
    fputs($fp, $str . "\n");
}
var_dump(file_get_contents('test.txt'));


function task6() {
    $filename = fopen('test.txt', "r");
    var_dump($filename);
}

task6();


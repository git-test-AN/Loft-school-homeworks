<?php

$day = rand(-3, 14);
echo "Текущий день на этой неделе: $day";
echo "<pre>";
switch ($day) {
    case ($day >= 1 && $day <= 5):
        echo "Это рабочий день";
        break;
    case ($day >= 6 && $day <= 7):
        echo "Это выходной день";
        break;
    case ($day >= -3 && $day <= 14):
        echo "Неизвестный день";
        break;
}

//Как решить проблему с нулевым рабочим днём?

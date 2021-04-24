<pre>
<?php

$day = rand(-3, 14);
$day = rand(-1, 1);
echo "Текущий день на этой неделе: $day\n";
switch (true) {
    case ($day >= 1 && $day <= 5):
        echo "Это рабочий день";
        break;
    case ($day >= 6 && $day <= 7):
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
        break;
}

//Как решить проблему с нулевым рабочим днём?

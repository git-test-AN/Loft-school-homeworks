<pre>
<?php

$day = rand(-3, 14);
echo "Текущий день на этой неделе: $day\n";
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день";
        break;
    case 6:
    case 7:
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
        break;
}

//Как решить проблему с нулевым рабочим днём?

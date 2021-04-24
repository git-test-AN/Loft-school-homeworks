<?php

echo '<table border="1">';
for ($a = 1; $a <= 10; $a++) {
    echo "<tr>";
    for ($b = 1; $b <= 10; $b++) {
        $n = $a * $b;
        if ($a % 2 == 0 && $b % 2 == 0) {
            $p = "($n)";
        }
         else {
             if ($a % 2 != 0 && $b % 2 != 0) {
                 $p = "[$n]";
             } else {
                 $p = $n;
             }
         }
        echo "<td> $p </td>";
    }
    echo "</tr>" , "\n";
}
echo "</table>";


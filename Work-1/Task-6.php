
<table>
    <caption></caption>
    <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <tr><td> </td><td> </td><td> </td><td> </td></tr>
    <tr><td> </td><td> </td><td> </td><td> </td></tr>
    <tr><td> </td><td> </td><td> </td><td> </td></tr>
</table>
<pre>
<?php


for ($a = 1; $a <= 10; $a++) {
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
        echo '| ', $p, ' |';
    }
    echo "\n";
}



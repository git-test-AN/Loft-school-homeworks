<?php

$age = rand(-10, 200);
echo "Ваш возврат (лет): $age";
echo "<pre>";
 if ($age > 18 && $age < 65) {
    echo "Вам еще работать и работать";
 }
    else {
        if ($age > 65 && $age < 90) {
            echo "Вам пора на пенсию";
        } else {
            if ($age > 1 && $age < 17) {
                echo "Вам ещё рано работать";
            }

    else {
            echo "Неизвестный возраст";
        }
    }
}

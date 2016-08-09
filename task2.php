<?php
    $age = rand(0, 100);
    echo "Возраст ", $age, "<br/>";
    if ($age < 18) {
        echo "Вам еще рано работать";
    }
    elseif ($age > 65){
        echo "Вам пора на пенсию";
    }
    else
        echo "Вам еще работать и работать";
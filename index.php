<?php

/*Задача: Дано  натуральное  число  N.
Определить,  является  ли  оно  автоморфным.
Автоморфное число  равнопоследним разрядам
квадрата этого числа. Например,  5 и 25,  6 и 36,  25 и 625.*/

//Является ли число аморфным
function isAutomorph(int $number): bool
{
    $squareNumber = $number**2;
    while ($number > 0) {
        if ($number%10 != $squareNumber % 10){
            return false;
        }
        $number = (int)($number / 10);
        $squareNumber = (int)($squareNumber/10);
    }
    return true;
}

$N = 25; //Натуральное число

if (isAutomorph($N)) {
    echo "Заданное натуральное число является 
    аморфным: ".$N." - ".$N**2;
};


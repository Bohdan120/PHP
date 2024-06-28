<?php


// function msg() {
//     echo "Hello, world! <br>";
// }

// msg();
// msg();
// msg();
// msg();

// function showName($name) {
//     echo "My name is $name <br>";
// }

// showName("Ihor");
// showName("Oleh");
// showName("Olha");

// function sum($num1, $num2) {
//     $result = $num1 + $num2;
//     return $result;
// }

// $res1 = sum(4, 5);
// echo $res1;

// echo "<br>";

// $res2 = sum(3, 7);
// echo $res2;

// function func($arr) {
//     $arr[1] = "m";
// }


// $array = ['a', 'b', 'c'];
// echo $array[1];
// echo "<br>";
// func($array);
// echo $array[1];


// Області видимості змінних.
// Локальні та глобальні змінні.

// Глобальна

// $name = "Oleh";
// echo $name;

// $name2 = "Ihor";

// function showName() {

//     global $name2;

//     $name = "Olha";
//     echo $name;
//     echo "<br>";
//     echo $name2;
// }

// showName();


// Локальна

// function showName() {
//     $name = "Oleh";
//     echo $name;
// }

// echo $name;


// Статичні змінні

// function test() {
//     static $a = 0;
//     echo "$a <br>";
//     $a++;
// }

// test();
// test();
// test();
// test();
// test();
// test();
// test();

// Функція з параметрами по замовчуванню

// function makecoffee($type = "Капучино") {
//     return "Готуємо чашку $type.\n";
// }

// echo makecoffee();
// echo makecoffee(null);
// echo makecoffee('Лате');


// Функції з необмеженною кількістю параметрів

// function sum(...$numbers) {
//     $count = 0;
//     $sum = 0;
//     foreach ($numbers as $num) {
//         $sum += $num;
//         $count++;
//     }
//     echo "Кількість чисел: $count \n";
//     return $sum;
// }
// echo sum(1, 25, 6, 2, 245, 9, 2);

// func_num_args() - повертає кількість аргументів, які передані функції.

// function sum(...$numbers) {
//     $count = func_num_args();
//     $sum = 0;
//     foreach ($numbers as $num) {
//         $sum += $num;
//     }
//     echo "Кількість чисел: $count \n";
//     return $sum;
// }
// echo sum(1, 25, 6, 2, 245, 9, 2, 7);

// Підключення зовнішніх файлів.

// require

// require 'vars1.php';
// include 'vars1.php';
// require_once 'vars1.php';

// echo "Одне $color $fruit";



?>
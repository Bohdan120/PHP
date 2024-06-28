<?php
//----------task_1----------
// $num = 3;
// if($num % 2 == 0)
// {
//     echo "$num is even";
// }
// else
// {
//     echo "$num is odd";
// }

//----------task_2----------
// $num1 = 10;
// $num2 = 6;

// if($num1 > $num2)
// {
//     echo "$num1 is greater than $num2";
// }
// else if($num1 == $num2 )
// {
//     echo("$num1 is equal $num2");
// }
// else
// {
//     echo "$num2 is greater than $num1";
// }

//----------task_3----------
// $num = -10;
// if($num < 0)
// {    
//     echo "Result:" .abs($num);
// }

//----------task_4----------
// $num = 10;
// $a = 9;
// $b = 15;

// if($num >= $a && $num <= $b)
// {
//     echo pow($num, 2);
// }
// else if($num >= $b)
// {
//     $n = $num - $b;
//     echo "Число більше від максимального на ".$n;
// }
// else
// {
//     $n = $a - $num;
//     echo "Число менше від мінімального на ".$n;
// }

//----------task_5----------

// $num = 6;
// if($num >= 1 && $num <= 6)
// {
//     echo "<h{$num}>Hello World </h{$num}>";
// }
// else
// {
//     echo "ERROR!";
// }

//----------task_6----------

// $day = 16; 
// $month = 6; 

// $season = '';
// if ($month >= 3 && $month <= 5) {
//     $season = 'весна';
// } elseif ($month >= 6 && $month <= 8) {
//     $season = 'літо';
// } elseif ($month >= 9 && $month <= 11) {
//     $season = 'осінь';
// } else {
//     $season = 'зима';
// }

// $monthNames = [
//     1 => 'січень', 
//     2 => 'лютий', 
//     3 => 'березень',
//     4 => 'квітень', 
//     5 => 'травень', 
//     6 => 'червень',
//     7 => 'липень', 
//     8 => 'серпень', 
//     9 => 'вересень',
//     10 => 'жовтень', 
//     11 => 'листопад', 
//     12 => 'грудень'
// ];
// $monthName = $monthNames[$month];

// $halfOfMonth = ($day <= 15) ? 'Перша' : 'Друга';

// echo "<p>День = {$day}, Місяць = {$month}</p>";
// echo "<p>Це є {$season}, {$monthName}. {$halfOfMonth} половина місяця</p>";

//----------task_7----------

$input_number = 1024; 
$from = "KB";
$to = "MB"; 

$multipliers = [
    "KB" => 1024,
    "MB" => 1024 * 1024,
    "GB" => 1024 * 1024 * 1024,   
];

if (isset($multipliers[$from]) && isset($multipliers[$to])) 
{  
    $result = $input_number * ($multipliers[$from] / $multipliers[$to]);    
    echo "$input_number $from дорівнює $result $to";
} 
else 
{   
    echo "Помилка: Невірні одиниці конвертації";
}



?>
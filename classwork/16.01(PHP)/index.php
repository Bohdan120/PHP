<?php

// $num = 2;
// var_dump($num);

// $lvl = 2;
// switch($lvl){
//     case 1:
//         echo 'User';
//         break;
//     case 2:
//         echo 'Admin';
//         break;
// }

// $i = 1;
// while($i < 10){
//     echo "$i";
//     $i++;
// }

// $i = 0;

// do{
//     echo "$i ";
//     $i++;
// } while($i <= 10)

// for($i = 0; $i<10; $i++)
// {
//     echo "$i "; 
// }

//$cars = array("reno", "audi", "mers", "bmw");

//print_r($cars)

// foreach($cars as $key => $value){
//     echo "$key = $value <br>";
// }


//Асоціативний масив
// $fruits = array(
//     "a" => "orange",
//     "b" => "banana",
//     "c" => "apple",
// );

// echo($fruits["b"]);
// print_r($fruits);

// function addNumberColor($n1, $n2, $color){
//     echo "Sum is: <span style='color: $color;'>".($n1 + $n2). "</span><br>";
// }


// addNumberColor(110, 50000, 'red');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">

    
</head>
<body>
    
    <?php
    $colors = array("red", "green", "blue", "orange", "pink");

    for ($i = 0; $i < 4; $i++) {
       
        $randomKey = array_rand($colors);
        $randomColor = array_splice($colors, $randomKey, 1)[0];

        echo '<div class="box" style="background-color: ' . $randomColor . ';">Div ' . ($i + 1) . '</div>';
    }
    ?>

    
    
    
</body>
</html>
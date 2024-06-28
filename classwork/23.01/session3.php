<?php

session_start();
echo 'id:'.session_id().'<br>';

$_SESSION['name'] = "Oleh";
echo 'This name '.$_SESSION['name'].'<br>';

?>

<a href = "session4.php">Forward</a>





<?php

session_start();
echo 'id:'.session_id().'<br>';

echo 'This name '.$_SESSION['name'].'<br>';

?>

<a href = "session3.php">Back</a>





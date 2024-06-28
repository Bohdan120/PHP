<?php

$users = 'pages/users.txt';

function register($name, $pass, $email) 
{
    $name = trim(htmlspecialchars($name));
    $pass = trim(htmlspecialchars($pass));
    $email = trim(htmlspecialchars($email));

    if($name == '' && $pass == '' && $email == '')
    {
        echo "h3 style='color: red'>Enter data!</h3>";
        return false;
    }
    if(strlen($name) < 3 && strlen($name) > 30 &&
       strlen($pass) < 3 && strlen($pass) > 30)
    {
        echo "h3 style='color: red'>Value lenght must be between 3 and 30 !</h3>";
        return false;
    }

    global $users;

    $file = fopen($users, 'a+');
    while($line = fgets($file, 128))
    {
        $readname = substr($line, 0, str_pos($line, ':'));
        if($readname == $name)
        {
            echo "h3 style='color: red'>Alredy used</h3>";
        }
    }
    $line = "$name:md5($pass):$email\r\n";
    fputs($file, $line);
    fclose($file);
    return true;

}






?>
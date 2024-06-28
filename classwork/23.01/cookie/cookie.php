<?php

if(!isset($_COOKIE['name']))
{
    setcookie('name', 'Bob', time()+60*60*24, '/', '', 0);
    setcookie('count', '1', time()+60*60*24, '/', '', 0);
}
else
{
    $_COOKIE['count'] = $_COOKIE['count'] + 1;
    setcookie('count', $_COOKIE['count']);
}

echo 'Name: 




?>
<?php

function connect(
    $host = 'localhost',
    $user = 'root',
    $pass = '',
    $dbname = 'BlogData'
) {
    global $link;
    $link = mysqli_connect($host, $user, $pass, $dbname) or die('connection error');
    mysqli_select_db($link, $dbname) or die('DB open error!');
    mysqli_query($link, 'set names "utf8"');
}
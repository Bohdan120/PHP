<h1>Register Form</h1>

<?php

function connect(
    $host = 'localhost',
    $user = 'root',
    $pass = '',
    $dbname = 'travels'
) {
    global $link;
    $link = mysqli_connect($host, $user, $pass, $dbname) or die('connection error');
    mysqli_select_db($link, $dbname) or die('DB open error!');
    mysqli_query($link, 'set names "utf8"');
}

function register($name, $pass, $email) {
    global $link;
    $name = trim(htmlspecialchars($name));
    $pass = trim(htmlspecialchars($pass));
    $email = trim(htmlspecialchars($email));

    if ($name == '' || $pass == '' || $email == '') {
        echo "<h3 style='color: red'>Enter data!</h3>";
        return false;
    }

    if (strlen($name) < 3 || strlen($name) > 30 ||
        strlen($pass) < 3 || strlen($pass) > 30) {
        echo "<h3 style='color: red'>Values length must be between 3 and 30!</h3>";
        return false;
    }

    $ins = 'INSERT into users (login, pass, email, roleid) values("'.$name.'", "'.md5($pass).'", "'.$email.'", 2)';
    connect();
    mysqli_query($link, $ins);
    $err = mysqli_errno($link);
    if ($err) {
        if ($err == 1062) echo "<h3 style='color: red'>This login is already taken!</h3>";
        else echo "<h3 style='color: red'>Error code: ".$err."</h3>";
        return false;
    }
    return true;
}



if (!isset($_POST['regbtn'])) {

?>

<form action="index.php?page=3" method="post">
    <div class="form-group">
        <label for="login">Login: </label>
        <input type="text" class="form-control" name="login">
    </div>

    <div class="form-group">
        <label for="pass1">Password: </label>
        <input type="password" class="form-control" name="pass1">
    </div>

    <div class="form-group">
        <label for="pass2">Repeat password: </label>
        <input type="password" class="form-control" name="pass2">
    </div>

    <div class="form-group">
        <label for="email">Email: </label>
        <input type="email" class="form-control" name="email">
    </div>
    <button name="regbtn" type="submit" class="btn btn-primary w-100 mt-3">Register</button>
</form>



<?php
}
else {
    if (register($_POST['login'], $_POST['pass1'], $_POST['email'])) echo "<h3 style='color: green'>New user added!</h3>";

}
?>
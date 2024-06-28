<?php

session_start();

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

function login($login, $pass) {
    $admin_login = 'admin';
    $admin_pass = 'adminpass';

    if ($login === $admin_login && $pass === $admin_pass) {
        $_SESSION['login'] = $login;
        return true;
    } else {
        return false;
    }
}

if (isset($_POST['loginbtn'])) {
    if (login($_POST['login'], $_POST['pass'])) {
        echo "<h3 style='color: green'>Login successful!</h3>";
    } else {
        echo "<h3 style='color: red'>Login failed. Please try again.</h3>";
    }
    exit();
}

?>

<h1>Admin Form</h1>

<?php
if (!isset($_SESSION['login'])) {
?>


<form action="admin.php" method="post">
    <div class="form-group">
        <label for="login">Login: </label>
        <input type="text" class="form-control" name="login">
    </div>
    <div class="form-group">
        <label for="pass">Password: </label>
        <input type="password" class="form-control" name="pass">
    </div>
    <button name="loginbtn" type="submit" class="btn btn-primary w-100 mt-3">Login</button>
</form>

<?php
} else {
?>


<form action="add_news.php" method="post">
    <div class="form-group">
        <label for="title">Title: </label>
        <input type="text" class="form-control" name="title">
    </div>
    <div class="form-group">
        <label for="image_url">Image URL: </label>
        <input type="text" class="form-control" name="image_url">
    </div>
    <div class="form-group">
        <label for="date_published">Date Published: </label>
        <input type="date" class="form-control" name="date_published">
    </div>
    <div class="form-group">
        <label for="content">Content: </label>
        <textarea class="form-control" name="content"></textarea>
    </div>
    <button name="addnews" type="submit" class="btn btn-primary w-100 mt-3">Add News</button>
</form>

<h2>Delete Post</h2>
    <form action="delete_news.php" method="post">
        <label for="post_id">Enter Post ID to delete:</label><br>
        <input type="text" id="post_id" name="post_id"><br>
        <input type="submit" value="Delete">
    </form>

<?php
}
?>

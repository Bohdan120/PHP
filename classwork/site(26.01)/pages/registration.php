<h1>Register Form</h1>

<?php

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
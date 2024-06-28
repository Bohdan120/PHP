<?php
include_once("db.php");
connect();

if(isset($_POST['post_id'])) {
    $id = $_POST['post_id'];

    $query = "DELETE FROM news WHERE id = $id";
    $result = mysqli_query($link, $query);

    if($result) {
        header("Location: blog.php");
        exit;
    } else {
        echo "Помилка видалення новини!";
    }
}
mysqli_close($link);
?>

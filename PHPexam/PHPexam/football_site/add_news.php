<?php
include_once("db.php");
connect();

if(isset($_POST['addnews'])) {
    $title = $_POST['title'];
    $image_url = $_POST['image_url'];
    $date_published = $_POST['date_published'];
    $content = $_POST['content'];

    $query = "INSERT INTO news (title, image_url, date_published, content) VALUES ('$title', '$image_url', '$date_published', '$content')";
    $result = mysqli_query($link, $query);

    if($result) {
        header("Location: blog.php");
        exit;
    } else {
        echo "Помилка додавання новини!";
    }
}
mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <header>

            </header>
        </div>

        <div class="row">
            <nav>
                <?php
                include_once('pages/menu.php');
                include_once('pages/functions.php');
                ?>
            </nav>
        </div>

        <div class="row">
            <section>
            <?php
                if(isset($_GET['page'])) {
                    $page = $_GET['page'];
                    if ($page == 1) include_once('pages/tours.php');
                    if ($page == 2) include_once('pages/comments.php');
                    if ($page == 3) include_once('pages/registration.php');
                    if ($page == 4) include_once('pages/admin.php');
                }

?>
            </section>
        </div>
        <div class="row">
                <footer>Bohdan &copy;</footer>
        </div>

    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
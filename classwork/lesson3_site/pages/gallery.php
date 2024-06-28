<h1>Gallery</h1>
<form action="index.php?page=3" method="post">
    <select name="ext">
        <?php
        $path = 'images/';

        if ($dir = opendir($path))
        {
            $ar = [];

            while (($file = readdir($dir)) !== false)
            {
                $fullname = $path . $file;
                $pos = strpos($fullname, '.');
                $ext = substr($fullname, $pos + 1);
                $ext = strtolower($ext);

                if (!in_array($ext, $ar)) {
                    $ar[] = $ext;
                    echo "<option>$ext</option>";
                }
            }
            closedir($dir);
        }

        ?>
    </select>
    <input type="submit" name="submit" value="Show pictures" class="btn btn-primary">
</form>

<?php

if (isset($_POST['submit'])) {
    $ext = $_POST['ext'];
    $ar = glob($path . "*." . $ext);
    echo "<div class='panel panel-primary'>";
    echo "<div class='panel-heading'>";
    echo "<h3 class='panel-title'>Gallery content</h3></div>";
    foreach ($ar as $a) {
        echo "<a href='".$a."' target='_blank'>
        <img src='".$a."' heigth='100px' border='1' alt='picture' class='img-polaroid'></a>";
    }
    echo "</div>";
}

?>

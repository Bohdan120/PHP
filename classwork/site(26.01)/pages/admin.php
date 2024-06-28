<h1>Admin</h1>

<div class="row">
    <div class="col-6">
    <?php

    connect();
    $sel = 'SELECT * from countries';
    $res = mysqli_query($link, $sel);
    echo '<form action="index.php?page=4" method="post" class="input-group" id="formcountry">';
    echo '<table class="table">';
    while ($row = mysqli_fetch_array($res, MYSQLI_NUM)) {
        echo '<tr>';
        echo '<td>'.$row[0].'</td>';
        echo '<td>'.$row[1].'</td>';
        echo '<td><input type="checkbox" name="cb'.$row[0].'"</td>';
        echo '</tr>';
    }
    echo '</table>';
    mysqli_free_result($res);

    echo '<input type="text" name="country" placeholder="Enter country" class="form-control">';
    echo '<input type="submit" name="addcountry" value="Add" class="btn btn-sm btn-info"> ';
    echo '<input type="submit" name="delcountry" value="Delete" class="btn btn-sm btn-warning"> ';
    echo '</form>';

    if (isset($_POST['addcountry'])) {
        $country = trim(htmlspecialchars($_POST['country']));
        if ($country == "") exit();
        $ins = 'INSERT INTO countries(country) values("'.$country.'")';
        mysqli_query($link, $ins);
        echo '<script>window.location=document.URL;</script>';
    }

    
    if (isset($_POST['delcountry'])) {
        foreach ($_POST as $key => $value) {
            if (substr($key, 0, 2) == "cb") {
                $idc = substr($key, 2);
                $del = 'DELETE from countries WHERE id='.$idc;
                mysqli_query($link, $del);
            }
        }
        echo '<script>window.location=document.URL;</script>';
    }



?>
    </div>
    <div class="col-6">
        
    </div>
</div>

<div class="row">
    <div class="col-6">

    </div>
    <div class="col-6">
        
    </div>
</div>
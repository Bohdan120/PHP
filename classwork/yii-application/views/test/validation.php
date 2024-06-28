<?php

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '</pre>';
}

?>

<h1>Test</h1>

<!-- <form method="post">

<p>Test attribute</p>
<input type="text" name="testAttribute">
<br><br>

<input type="submit" value="send">


</form> -->

<!-- <form method="post">
    <p>Start value</p>
    <input type="text" name="startValue">
    <br><br>

    <p>End value</p>
    <input type="text" name="endValue">
    <br><br>

    <input type="submit" value="send">
    
</form> -->

<!-- <form method="post">
    <p>Site:</p>
    <input type="text" name="siteAddress">
    <br><br>


    <input type="submit" value="send">
    
</form> -->

<form method="post">

    <p>
        <input type="checkbox" name="options[]" value="aaa"> Wifi:
    </p>
    <br>

    <p>
        <input type="checkbox" name="options[]" value="2"> Big window:
    </p>
    <br>

    <p>
        <input type="checkbox" name="options[]" value="3"> Ice cream:
    </p>
    <br>


    <input type="submit" value="send">
    
</form>
<?php

// if (Yii::$app->session->hasFlash('subscribeStatus')) {
//     echo Yii::$app->session->getFlash('subscribeStatus');
// }


if ($model->hasErrors()) {
    print_r($model->getErrors());
}

?>

<form method="post">
    <p>Email: </p>
    <input type="text" name="email">
    <br><br>
    <input type="submit" value="Subscribe">
</form>
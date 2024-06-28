
<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
// use Yii;
if ($model->hasErrors()) {
    print_r($model->getErrors());
}

?>


<h1>Welcome to our company</h1>

<!-- <form method="post">

    <p>First name:</p>
    <input type="text" name="firstName">
    <br><br>
    
    <p>Last name:</p>
    <input type="text" name="lastName">
    <br><br>

    <p>Middle name:</p>
    <input type="text" name="middleName">
    <br><br>

    <p>Email:</p>
    <input type="email" name="email">
    <br><br>

    <input type="submit" value="Register">

</form> -->


<?php $form = ActiveForm::begin(); ?>

<?php echo $form->field($model, 'firstName')->hint("Help me!"); ?>
<?php echo $form->field($model, 'lastName'); ?>
<?php echo $form->field($model, 'middleName'); ?>
<?php echo $form->field($model, 'email'); ?>
<?php echo $form->field($model, 'birthDate'); ?>
<?php echo $form->field($model, 'hiringDate'); ?>
<?php echo $form->field($model, 'position'); ?>
<?php echo $form->field($model, 'idCode'); ?>
<?php echo $form->field($model, 'city')->dropDownList($model->getCitiesList()); ?>

<?php echo Html::submitButton('Send', ['class' => 'btn btn-primary w-25 mt-2']); ?>


<?php ActiveForm::end(); ?>
<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Test;
use frontend\models\ExampleValidation;


class TestController extends Controller {

   public function actionIndex() {

    $max = Yii::$app->params['maxNewsInList'];
    // echo $max; die;

    $list = Test::getNewsList($max);
    // print_r($list);
    // die;

    // $email = Yii::$app->params['adminEmail'];
    // echo $email;
    // die;

    

    return $this->render('index', [
        'list' => $list
    ]);

   }


   public function actionView($id) {
    // echo $id; die;
    $item = Test::getItem($id);
    return $this->render('view', [
        'item' => $item
    ]);
   }


   public function actionValidation() {

    $model = new ExampleValidation();

    $formData = Yii::$app->request->post();

    if (Yii::$app->request->isPost) {
        print_r($formData);

        // die;
        $model->attributes = $formData;

        

        if ($model->validate()) {
            Yii::$app->session->setFlash('success', 'Data validated!');
        }

    }


    return $this->render('validation', [
        'model' => $model
    ]);

   }


}


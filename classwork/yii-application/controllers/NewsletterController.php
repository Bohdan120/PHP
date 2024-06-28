<?php



namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Subscribe;

class NewsletterController extends Controller {

    public function actionSubscribe() {
        $model = new Subscribe();
        $formData = Yii::$app->request->post();

        if (Yii::$app->request->isPost) {
            $model->email = $formData['email'];
            $model->validate();
        }

        // if ($model->validate()) {
        //     $model->save();
        // }
        if ($model->validate() && $model->save()) {
            Yii::$app->session->setFlash('success', 'Subscribe completed!');
        }


        return $this->render('subscribe', [
            'model' => $model
        ]);
    }


}
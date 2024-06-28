<?php

namespace frontend\controllers;

use frontend\models\Book;
use Yii;

class BookController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $bookList = Book::find()
                    // ->where(['publisher_id' => 1])
                    // ->limit(2)
                    ->orderBy('date_published')
                    ->all();
        
        return $this->render('index', [
            'bookList' => $bookList
        ]);
    }


    public function actionCreate() {
        $book = new Book();

        if ($book->load(Yii::$app->request->post()) && $book->save()) {
            Yii::$app->session->setFlash('success', 'Saved');
            return $this->redirect(['book/index']);
            // return $this->refresh();
        }

        return $this->render('create', [
            'book' => $book
        ]);
    }
    

}

<?php


namespace frontend\controllers;
use yii\web\Controller;
use yii\db\Connection;
use yii\db\Command;


class DaoController extends Controller {
    public function actionIndex() {
        $db = new Connection([
            'dsn' => 'mysql:host=localhost;dbname=yii',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8'
        ]);

        $sql = 'SELECT name FROM city WHERE id = 1';
        $command = new Command([
            'db' => $db,
            'sql' => $sql
        ]);

        $arrayWithResults = $command->queryOne();

        print_r($arrayWithResults); die;

        return $this->render('index');


    }
}
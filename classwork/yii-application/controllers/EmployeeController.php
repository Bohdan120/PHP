<?php



namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\Employee;

// class EmployeeController extends Controller {

//     public function actionRegister() {

//         $model = new Employee();

//         $model->scenario = Employee::SCENARIO_EMPLOYEE_REGISTER;

//         $formData = Yii::$app->request->post();

//         if (Yii::$app->request->isPost) {

//             $model->attributes = $formData;
//             if ($model->validate() && $model->save()) {
//                 Yii::$app->session->setFlash('success', 'Registered!');
//             }
//         }

//         return $this->render('register', [
//             'model' => $model,
//         ]);
//     }

//     public function actionUpdate() {

//         $model = new Employee();

//         $model->scenario = Employee::SCENARIO_EMPLOYEE_UPDATE;

//         $formData = Yii::$app->request->post();

//         if (Yii::$app->request->isPost) {

//             $model->attributes = $formData;
//             if ($model->validate() && $model->save()) {
//                 Yii::$app->session->setFlash('success', 'Data updated!');
//             }
//         }

//         return $this->render('update', [
//             'model' => $model
//         ]);
//     }

// }


use frontend\models\example\Human;
use frontend\models\example\Animal;

class EmployeeController extends Controller {

    public function actionIndex() {
        $employee1 = new Employee();
$employee1->firstName = 'John';
$employee1->lastName = 'Doe';
$employee1->middleName = 'Smith';
$employee1->salary = 1000;

        // foreach ($employee1 as $attribute => $value) {
        //     echo "$attribute : $value <br>";
        // }  
        // die;

            $array = $employee1->toArray();
            print_r($employee1->getAttributes()); die;

    }


    public function actionTest() {
        $human = new Human();
        $animal = new Animal();

        $human->walk();
        echo '<br>';
        $animal->walk();
        die;

    }

}
<?php



namespace frontend\models;

use yii\base\Model;
use yii\helpers\ArrayHelper;
use Yii;
class Employee extends Model {

    const SCENARIO_EMPLOYEE_REGISTER = 'employee_register';
    const SCENARIO_EMPLOYEE_UPDATE = 'employee_update';

    public $firstName;
    public $lastName;
    public $middleName;
    public $salary;
    public $email;
    public $birthDate;
    public $hiringDate;
    public $city;
    public $position;
    public $idCode;

    public function scenarios() {
        return [
            self::SCENARIO_EMPLOYEE_REGISTER => [
                'firstName', 
                'lastName', 
                'middleName', 
                'email',
                'birthDate',
                'hiringDate',
                'city',
                'position',
                'idCode'
            ],
            self::SCENARIO_EMPLOYEE_UPDATE => ['firstName', 'lastName', 'middleName']
        ];
    }

    public function rules() {
        return [
            [['firstName', 'lastName', 'email', 'birthDate'], 'required'],
            [['firstName'], 'string', 'min' => 2],
            [['lastName'], 'string', 'min' => 3],
            [['email'], 'email'],
            [['middleName'], 'required', 'on' => self::SCENARIO_EMPLOYEE_UPDATE],


            // new

            [['birthDate', 'hiringDate'], 'date', 'format' => 'php:Y-m-d'],
            [['city'], 'string'],
            [['position'], 'string'],
            [['idCode'], 'string', 'length' => 10],
            [['hiringDate', 'position', 'idCode'], 'required', 'on' => self::SCENARIO_EMPLOYEE_REGISTER]

        ];
    }

    public function save() {
        return true;
    }

    public function getCitiesList() {
        $sql = 'SELECT * FROM city';
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        return ArrayHelper::map($result, 'id' , 'name');
    }



}


// class Employee extends Model {
//     public $firstName;
//     public $lastName;
//     public $middleName;
//     public $salary;
// }
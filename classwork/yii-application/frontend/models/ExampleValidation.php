<?php


namespace frontend\models;

use yii\base\Model;

class ExampleValidation extends Model {

    // const STATUS_ACTIVE = 1;
    // const STATUS_DISABLE = 2;
    // const STATUS_ARCHIVED = 3;


    // public $testAttribute;

    // public $startValue;
    // public $endValue;

    // public $siteAddress;

    public $options;


    public function rules() {
        return [
            // [['testAttribute'] , 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_ARCHIVED]]
            // [['testAttribute'], 'date', 'format' => 'php:Y-m-d']
            // [['testAttribute'], 'match', 'pattern' => '/^[a-zA-Z0-9_-]+$/']

            // [
            // ['startValue'], 'compare',
            // 'compareAttribute' => 'endValue',
            // 'operator' => '<'
            // ],
            // [['endValue'], 'safe']

            // [['siteAddress'], 'required'],
            // [['siteAddress'], 'url', 'defaultScheme' => 'http'],

                [['options'], 'required'],
                [['options'], 'each', 'rule' => ['integer']],
                
        ];
    }


}


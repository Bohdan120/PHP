<?php


namespace frontend\models;

use Yii;
// use frontend\components\StringHelper;

class Test {

    public static function getNewsList($max) {
        $max = intval($max);
        $sql = 'SELECT * FROM news LIMIT '.$max;
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        // $helper = new StringHelper();
        // $helper = Yii::$app->stringHelper;
        if(!empty($result) && is_array($result)) {
            foreach($result as &$item) {
                $item['content'] = Yii::$app->stringHelper->getShort($item['content']);
            }
        }

        return $result;

    }


    public static function getItem($id) {
        $id = intval($id);
        $sql = 'SELECT * FROM news WHERE id = '.$id;
        return Yii::$app->db->createCommand($sql)->queryOne();
    }


}
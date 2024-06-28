<?php

class Category {


    // Вивід масиву категорій

    public static function getCategoriesList() {

        $db = Db::getConnection();

        $query = 'SELECT id, name FROM category ORDER BY sort_order ASC';

        $result = $db->query($query);

        $data = $result->fetchAll();

        return $data;

    }



}




?>
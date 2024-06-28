<?php

class Product {


    public static function getLatestProducts($count = 10)
     {

        $db = Db::getConnection();

        $query = 'SELECT id, name, price, image, is_new FROM product WHERE status = "1" ORDER BY id DESC LIMIT '.$count;

        $result = $db->query($query);

        $data = $result->fetchAll();


        return $data;


     }


}





?>
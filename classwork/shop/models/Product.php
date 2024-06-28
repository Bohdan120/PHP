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


     public static function getProductsListByCategory($categoryId = false, $page = 1) {


      if ($categoryId) {

         $offset = ($page - 1) * 3;

         $db = Db::getConnection();

      $query = 'SELECT id, name, price, image, is_new FROM product WHERE status = "1" AND category_id = '.$categoryId.' ORDER BY id DESC LIMIT 3 OFFSET '.$offset;

      $result = $db->query($query);

      $data = $result->fetchAll();

      return $data;
      }
  }


  public static function getProductById($id) {
   if ($id) {
      $db = Db::getConnection();

      $query = 'SELECT * FROM product WHERE id = '.$id;

      $result = $db->query($query);

      $data = $result->fetch();
      return $data;

   }
  }


  public static function getTotalProductsInCategory($categoryId) {
   $db = Db::getConnection();

   $query = 'SELECT count(id) AS count FROM product WHERE status = "1" AND category_id = '.$categoryId;

   $result = $db->query($query);

   $data = $result->fetch();

   return $data['count'];


  }


}





?>
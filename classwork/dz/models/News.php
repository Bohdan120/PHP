<?php

class News {
    
    // Повертаємо новину по ID
    public static function getNewsItemById($id) {
        // Запит до БД
        $db = Db::getConnection();

        $result = $db->query('SELECT * FROM news WHERE id='.$id);

        $data = $result->fetch();

        return $data;
        

    }

    // Повертаємо список новин
    public static function getNewsList() {
        // Запит до БД

        $db = Db::getConnection();

        $result = $db->query('SELECT id, title, date, short_content, author_name FROM news ORDER BY date DESC LIMIT 10');

        $data = $result->fetchAll();
        return $data;

    }



}



?>
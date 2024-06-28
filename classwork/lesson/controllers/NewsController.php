<?php

include_once ROOT.'/models/News.php';


class NewsController {
    public function actionIndex() {
        $newsList = [];
        $newsList = News::getNewsList();

        require_once(ROOT.'/views/news/index.php');
        // print_r($newsList);

        // echo 'Список новин';
        return true;
    }

    public function actionView($id) {
        if ($id) {
            $newsItem = News::getNewsItemById($id);

            require_once(ROOT.'/views/news/view.php');
        }
        // echo "Перегляд новини $id з категорії $category";
        return true;
    }
}
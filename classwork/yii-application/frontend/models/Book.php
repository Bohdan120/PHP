<?php


namespace frontend\models;

use yii\db\ActiveRecord;


class Book extends ActiveRecord {
    
    public static function tableName() {
        return '{{book}}';
    }

    public function rules() {
        return [
            [['name', 'publisher_id'], 'required']
        ];
    }

    public function getPublisher() {
        return $this->hasOne(Publisher::className(), ['id' => 'publisher_id'])->one();
    }

    public function getPublisherName() {

        if ($publisher = $this->getPublisher()) {
            return $publisher->name;
        }
        return 'not set';
    }

    public function getBookToAuthorRelations() {
        // book_id - id книги з таблиці book_to_author
        // id - id книги з таблиці book
        return $this->hasMany(BookToAuthor::className(), ['book_id' => 'id']);
    }

    public function getAuthors() {
        // id - id автора з таблиці author
        // author_id - id автора з таблиці book_to_author
        return $this->hasMany(Author::className(), ['id' => 'author_id'])
                                        ->via('bookToAuthorRelations')
                                        ->all();
    }

}
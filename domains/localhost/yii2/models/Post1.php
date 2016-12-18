<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
     * @property string $title
 * @property string $slogan
 * @property string $description
 * @property integer $user_id
 * @property string $at_date * @property string $type

 * @property string $author
 * @property string $sourceUrl
 * @property string $sourceName
 * @property string $status
 * @property string $questionnaire
 * @property integer $commentsOn
 * @property integer $regionNewsCheck
 * @property integer $importantNewsCheck
 * @property integer $PressReleaseCheck
 * @property integer $adult
 * @property resource $imageFile
 */
class Post extends \yii\db\ActiveRecord
{

    public $imageFile;
    public $questions;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['slogan', 'description', 'type', 'status', 'questionnaire', 'imageFile'], 'string'],
            [['slogan', 'description'], 'string'],
            [['commentsOn_check', 'regionNews_check', 'importantNews_check', 'pressRelease_check', 'adult_check'], 'integer'],
//            [['at_date', 'user_id', 'status_id', 'type_id'], 'safe'],
            [['at_date', 'user_id', 'status_id'], 'safe'],
            [['category_id', 'title', 'author', 'source_url', 'source_name', 'miniature_url', 'miniature_desc'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Рубрика',
            'title' => 'Заголовок',
            'slogan' => 'Фишка',
            'description' => 'Текст',
            'user_id' => 'User ID',
            'type' => 'Тип новости',
            'at_date' => 'Время публикации',
            'author' => 'Автор публикации',
            'sourceUrl' => 'Источник (http://)',
            'sourceName' => 'Название источника',
            'status' => 'Статус публикации',
//            'questionnaire' => 'Опрос',
//            'questions' => 'Варианты ответа (через / )',
            'commentsOn' => 'Разрешить коментировать статью',
            'regionNewsCheck' => 'Региональная новость  ',
            'importantNewsCheck' => 'Добавить в блок Важные новости',
            'PressReleaseCheck' => 'Новость подготовлена по пресс-релизу',
            'adult' => 'Adult',
            'miniature_url' => 'Загрузить миниатюру',
            'miniature_desc' => 'Описание миниатюры',
        ];
    }

//    public function setAuthor($name)
//    {
//        return $this->author = $name;
//    }

    public function upload()
    {
        if ($this->validate()) {
//            $name = $this->imageFile->baseName . '.' . $this->imageFile->extension;
            $name = uniqid() . '.' . $this->imageFile->extension;
            $path = 'uploads/post/original/' . $name;
            $this->imageFile->saveAs($path);
//            $this->setAuthor($name);
//            $this->attachImage($path);
            $this->setAttribute( 'miniature_url', '/' . $path );
            $this->save();
            return true;
        } else {
            return false;
        }
    }


}































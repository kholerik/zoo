<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "spectopic".
 *
 * @property integer $id
 * @property string $title
 * @property integer $create_date
 * @property integer $end_date
 * @property string $miniature_url
 * @property string $description
 * @property string $plashka_text
 * @property string $plashka_color
 * @property string $keywords
 *
 * @property Post[] $posts
 */
class Spectopic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'spectopic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_date', 'end_date'], 'integer'],
            [['description'], 'string'],
            [['title', 'miniature_url', 'plashka_text', 'keywords'], 'string', 'max' => 500],
            [['plashka_color'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'create_date' => 'Create Date',
            'end_date' => 'Действует до',
            'miniature_url' => 'Топ фото',
            'description' => 'Краткое описание',
            'plashka_text' => 'Текст плашки',
            'plashka_color' => 'Цвет плашки',
            'keywords' => 'Ключевые слова',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Post::className(), ['specTopic_id' => 'id']);
    }
}

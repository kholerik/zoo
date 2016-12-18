<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "static_page".
 *
 * @property integer $id
 * @property string $title
 * @property string $keyword
 * @property string $content
 */
class StaticPage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'static_page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'string', 'max' => 255],
            [['keyword'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'keyword' => 'Keyword',
            'content' => 'Content',
        ];
    }
}

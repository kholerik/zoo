<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pFormat".
 *
 * @property integer $id
 * @property string $name
 * @property string $photo_url
 *
 * @property Poster[] $posters
 */
class PFormat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pFormat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'photo_url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'photo_url' => 'Photo Url',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosters()
    {
        return $this->hasMany(Poster::className(), ['format_id' => 'id']);
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pAge".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Poster[] $posters
 */
class PAge extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pAge';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosters()
    {
        return $this->hasMany(Poster::className(), ['age_id' => 'id']);
    }
}

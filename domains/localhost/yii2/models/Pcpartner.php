<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pcpartner".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Photocontest[] $photocontests
 */
class Pcpartner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pcpartner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
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
//    public function getPhotocontests()
//    {
//        return $this->hasMany(Photocontest::className(), ['partnerType_id' => 'id']);
//    }
}

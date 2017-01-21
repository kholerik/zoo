<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pPhoto_mn".
 *
 * @property integer $pposter_id
 * @property integer $pphoto_id
 *
 * @property Poster $pposter
 * @property Pphoto $pphoto
 */
class PPhotoMn extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pPhoto_mn';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pposter_id', 'pphoto_id'], 'required'],
            [['pposter_id', 'pphoto_id'], 'integer'],
            [['pposter_id'], 'exist', 'skipOnError' => true, 'targetClass' => Poster::className(), 'targetAttribute' => ['pposter_id' => 'id']],
            [['pphoto_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pphoto::className(), 'targetAttribute' => ['pphoto_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pposter_id' => 'Pposter ID',
            'pphoto_id' => 'Pphoto ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPposter()
    {
        return $this->hasOne(Poster::className(), ['id' => 'pposter_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPphoto()
    {
        return $this->hasOne(Pphoto::className(), ['id' => 'pphoto_id']);
    }
}

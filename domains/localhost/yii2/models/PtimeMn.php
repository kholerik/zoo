<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ptime_mn".
 *
 * @property integer $poster_id
 * @property integer $ptime_id
 *
 * @property Poster $poster
 * @property PTime $ptime
 */
class PtimeMn extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ptime_mn';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['poster_id', 'ptime_id'], 'required'],
            [['poster_id', 'ptime_id'], 'integer'],
            [['poster_id'], 'exist', 'skipOnError' => true, 'targetClass' => Poster::className(), 'targetAttribute' => ['poster_id' => 'id']],
            [['ptime_id'], 'exist', 'skipOnError' => true, 'targetClass' => PTime::className(), 'targetAttribute' => ['ptime_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'poster_id' => 'Poster ID',
            'ptime_id' => 'Ptime ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPoster()
    {
        return $this->hasOne(Poster::className(), ['id' => 'poster_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPtime()
    {
        return $this->hasOne(PTime::className(), ['id' => 'ptime_id']);
    }
}

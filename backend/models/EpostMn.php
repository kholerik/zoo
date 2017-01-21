<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "epost_mn".
 *
 * @property integer $ePost_id
 * @property integer $enterprise_id
 *
 * @property Enterprise $ePost
 * @property Epost $ePost0
 */
class EpostMn extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'epost_mn';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ePost_id', 'enterprise_id'], 'required'],
            [['ePost_id', 'enterprise_id'], 'integer'],
            [['ePost_id'], 'exist', 'skipOnError' => true, 'targetClass' => Enterprise::className(), 'targetAttribute' => ['ePost_id' => 'id']],
            [['ePost_id'], 'exist', 'skipOnError' => true, 'targetClass' => Epost::className(), 'targetAttribute' => ['ePost_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ePost_id' => 'E Post ID',
            'enterprise_id' => 'Enterprise ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEPost()
    {
        return $this->hasOne(Enterprise::className(), ['id' => 'ePost_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEPost0()
    {
        return $this->hasOne(Epost::className(), ['id' => 'ePost_id']);
    }
}

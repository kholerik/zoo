<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estock_mn".
 *
 * @property integer $eStock_id
 * @property integer $enterprise_id
 *
 * @property Estock $eStock
 * @property Enterprise $enterprise
 */
class EstockMn extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estock_mn';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['eStock_id', 'enterprise_id'], 'required'],
            [['eStock_id', 'enterprise_id'], 'integer'],
            [['eStock_id'], 'exist', 'skipOnError' => true, 'targetClass' => Estock::className(), 'targetAttribute' => ['eStock_id' => 'id']],
            [['enterprise_id'], 'exist', 'skipOnError' => true, 'targetClass' => Enterprise::className(), 'targetAttribute' => ['enterprise_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'eStock_id' => 'E Stock ID',
            'enterprise_id' => 'Enterprise ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEStock()
    {
        return $this->hasOne(Estock::className(), ['id' => 'eStock_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnterprise()
    {
        return $this->hasOne(Enterprise::className(), ['id' => 'enterprise_id']);
    }
}

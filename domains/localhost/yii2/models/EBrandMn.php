<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "eBrand_mn".
 *
 * @property integer $enterprise_id
 * @property integer $brand_id
 *
 * @property Enterprise $enterprise
 * @property Ebrand $brand
 */
class EBrandMn extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'eBrand_mn';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['enterprise_id', 'brand_id'], 'required'],
            [['enterprise_id', 'brand_id'], 'integer'],
            [['enterprise_id'], 'exist', 'skipOnError' => true, 'targetClass' => Enterprise::className(), 'targetAttribute' => ['enterprise_id' => 'id']],
            [['brand_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ebrand::className(), 'targetAttribute' => ['brand_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'enterprise_id' => 'Enterprise ID',
            'brand_id' => 'Brand ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnterprise()
    {
        return $this->hasOne(Enterprise::className(), ['id' => 'enterprise_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrand()
    {
        return $this->hasOne(Ebrand::className(), ['id' => 'brand_id']);
    }
}

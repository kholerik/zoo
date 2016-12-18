<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "eproduct_mn".
 *
 * @property integer $enterprise_id
 * @property integer $product_id
 *
 * @property Enterprise $enterprise
 * @property EProduct $product
 */
class EproductMn extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'eproduct_mn';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['enterprise_id', 'product_id'], 'required'],
            [['enterprise_id', 'product_id'], 'integer'],
            [['enterprise_id'], 'exist', 'skipOnError' => true, 'targetClass' => Enterprise::className(), 'targetAttribute' => ['enterprise_id' => 'id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => EProduct::className(), 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'enterprise_id' => 'Enterprise ID',
            'product_id' => 'Product ID',
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
    public function getProduct()
    {
        return $this->hasOne(EProduct::className(), ['id' => 'product_id']);
    }
}

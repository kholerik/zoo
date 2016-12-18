<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "etariff".
 *
 * @property integer $id
 * @property string $name
 * @property integer $categoryCount
 * @property integer $photoCount
 * @property integer $orderCount
 * @property integer $productCount
 * @property integer $handBook
 * @property integer $uniqueAddress
 * @property integer $banner
 * @property integer $branding
 *
 * @property Enterprise[] $enterprises
 * @property ServicetariffMn[] $servicetariffMns
 * @property Service[] $services
 */
class Etariff extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'etariff';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['categoryCount', 'photoCount', 'orderCount', 'productCount', 'handBook', 'uniqueAddress', 'banner', 'branding'], 'integer'],
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
            'categoryCount' => 'Category Count',
            'photoCount' => 'Photo Count',
            'orderCount' => 'Order Count',
            'productCount' => 'Product Count',
            'handBook' => 'Hand Book',
            'uniqueAddress' => 'Unique Address',
            'banner' => 'Banner',
            'branding' => 'Branding',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnterprises()
    {
        return $this->hasMany(Enterprise::className(), ['tariff_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServicetariffMns()
    {
        return $this->hasMany(ServicetariffMn::className(), ['tariff_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasMany(Service::className(), ['id' => 'service_id'])->viaTable('servicetariff_mn', ['tariff_id' => 'id']);
    }
}

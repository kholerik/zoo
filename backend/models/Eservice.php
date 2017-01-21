<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "eservice".
 *
 * @property integer $id
 * @property integer $wifi_check
 * @property integer $lunch_check
 * @property integer $childRoom_check
 * @property integer $shipping_check
 * @property integer $livemusic_check
 * @property integer $nosmoking_check
 * @property integer $hookah_check
 * @property integer $karaoke_check
 * @property integer $24h_check
 * @property integer $summerPlace_check
 * @property integer $montage_check
 * @property integer $parking_check
 * @property integer $show_check
 *
 * @property Enterprise[] $enterprises
 */
class Eservice extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'eservice';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'wifi_check', 'lunch_check', 'childRoom_check', 'shipping_check', 'livemusic_check', 'nosmoking_check', 'hookah_check', 'karaoke_check', '24h_check', 'summerPlace_check', 'montage_check', 'parking_check', 'show_check'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'wifi_check' => 'Wifi Check',
            'lunch_check' => 'Lunch Check',
            'childRoom_check' => 'Child Room Check',
            'shipping_check' => 'Shipping Check',
            'livemusic_check' => 'Livemusic Check',
            'nosmoking_check' => 'Nosmoking Check',
            'hookah_check' => 'Hookah Check',
            'karaoke_check' => 'Karaoke Check',
            '24h_check' => '24h Check',
            'summerPlace_check' => 'Summer Place Check',
            'montage_check' => 'Montage Check',
            'parking_check' => 'Parking Check',
            'show_check' => 'Show Check',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnterprises()
    {
        return $this->hasMany(Enterprise::className(), ['servise_id' => 'id']);
    }
}

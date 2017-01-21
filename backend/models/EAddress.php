<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "eAddress".
 *
 * @property integer $id
 * @property string $region
 * @property integer $index
 * @property integer $city_id
 * @property integer $area_id
 * @property integer $street_id
 * @property integer $house_id
 * @property string $houseAdd
 * @property integer $roadKm
 * @property string $comment
 * @property integer $mapOn_check
 *
 * @property Enterprise[] $enterprises
 * @property Sarea $sarea
 * @property Scity $scity
 * @property Shouse $shouse
 * @property Sstreet $sstreet
 */
class EAddress extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'eAddress';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'index', 'city_id', 'area_id', 'street_id', 'house_id', 'roadKm', 'mapOn_check'], 'integer'],
            [['comment'], 'string'],
            [['region'], 'string', 'max' => 255],
            [['houseAdd'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'region' => 'Region',
            'index' => 'Index',
            'city_id' => 'City ID',
            'area_id' => 'Area ID',
            'street_id' => 'Street ID',
            'house_id' => 'House ID',
            'houseAdd' => 'House Add',
            'roadKm' => 'Road Km',
            'comment' => 'Comment',
            'mapOn_check' => 'Map On Check',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnterprises()
    {
        return $this->hasMany(Enterprise::className(), ['address_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSarea()
    {
        return $this->hasOne(Sarea::className(), ['id' => 'area_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScity()
    {
        return $this->hasOne(Scity::className(), ['id' => 'city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShouse()
    {
        return $this->hasOne(Shouse::className(), ['id' => 'house_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSstreet()
    {
        return $this->hasOne(Sstreet::className(), ['id' => 'street_id']);
    }
}

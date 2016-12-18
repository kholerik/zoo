<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "esocnet".
 *
 * @property integer $id
 * @property string $VK
 * @property string $FB
 * @property string $twitter
 * @property string $odnoklassniki
 * @property string $googlePlus
 * @property string $youtube
 * @property string $moyMir
 * @property string $forsquare
 * @property string $instagramm
 *
 * @property Enterprise[] $enterprises
 */
class Esocnet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'esocnet';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['VK', 'FB', 'twitter', 'odnoklassniki', 'googlePlus', 'youtube', 'moyMir', 'forsquare', 'instagramm'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'VK' => 'Vk',
            'FB' => 'Fb',
            'twitter' => 'Twitter',
            'odnoklassniki' => 'Odnoklassniki',
            'googlePlus' => 'Google Plus',
            'youtube' => 'Youtube',
            'moyMir' => 'Moy Mir',
            'forsquare' => 'Forsquare',
            'instagramm' => 'Instagramm',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnterprises()
    {
        return $this->hasMany(Enterprise::className(), ['socnet_id' => 'id']);
    }
}

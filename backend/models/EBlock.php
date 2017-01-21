<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "eBlock".
 *
 * @property integer $id
 * @property integer $service_check
 * @property integer $brand_check
 * @property integer $stock_check
 * @property integer $album_check
 * @property integer $category_check
 * @property integer $logo_check
 * @property integer $post_check
 * @property integer $vacancy_check
 * @property integer $file_check
 * @property integer $socnet_check
 *
 * @property Enterprise[] $enterprises
 * @property Enterprise[] $enterprises0
 */
class EBlock extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'eBlock';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['service_check', 'brand_check', 'stock_check', 'album_check', 'category_check', 'logo_check', 'post_check', 'vacancy_check', 'file_check', 'socnet_check'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'service_check' => 'Service Check',
            'brand_check' => 'Brand Check',
            'stock_check' => 'Stock Check',
            'album_check' => 'Album Check',
            'category_check' => 'Category Check',
            'logo_check' => 'Logo Check',
            'post_check' => 'Post Check',
            'vacancy_check' => 'Vacancy Check',
            'file_check' => 'File Check',
            'socnet_check' => 'Socnet Check',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnterprises()
    {
        return $this->hasMany(Enterprise::className(), ['block_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnterprises0()
    {
        return $this->hasMany(Enterprise::className(), ['block_id' => 'id']);
    }
}

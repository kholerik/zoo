<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ecategory".
 *
 * @property integer $id
 * @property integer $name
 * @property integer $parentCategory
 * @property integer $description
 *
 * @property Enterprise[] $enterprises
 */
class Ecategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ecategory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'parentCategory', 'description'], 'integer'],
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
            'parentCategory' => 'Parent Category',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnterprises()
    {
        return $this->hasMany(Enterprise::className(), ['category_id' => 'id']);
    }
}

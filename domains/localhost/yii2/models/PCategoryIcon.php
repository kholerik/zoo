<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pCategory_icon".
 *
 * @property integer $id
 * @property string $file_url
 *
 * @property PCategory[] $pCategories
 */
class PCategoryIcon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pCategory_icon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file_url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'file_url' => 'File Url',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPCategories()
    {
        return $this->hasMany(PCategory::className(), ['icon_id' => 'id']);
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pc_gallery".
 *
 * @property integer $id
 * @property integer $photocontest_id
 * @property string $photo_url
 * @property string $name
 * @property string $description
 *
 * @property Photocontest $photocontest
 */
class PcGallery extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pc_gallery';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['photocontest_id'], 'integer'],
            [['photo_url', 'name'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 500],
            [['photocontest_id'], 'exist', 'skipOnError' => true, 'targetClass' => Photocontest::className(), 'targetAttribute' => ['photocontest_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'photocontest_id' => 'Photocontest ID',
            'photo_url' => 'Photo Url',
            'name' => 'Name',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhotocontest()
    {
        return $this->hasOne(Photocontest::className(), ['id' => 'photocontest_id']);
    }
}

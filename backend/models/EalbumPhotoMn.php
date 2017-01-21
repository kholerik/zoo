<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ealbum_photo_mn".
 *
 * @property integer $ePhoto_id
 * @property integer $album_id
 *
 * @property Ephoto $ePhoto
 * @property Enterprise $album
 */
class EalbumPhotoMn extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ealbum_photo_mn';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ePhoto_id', 'album_id'], 'required'],
            [['ePhoto_id', 'album_id'], 'integer'],
            [['ePhoto_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ephoto::className(), 'targetAttribute' => ['ePhoto_id' => 'id']],
            [['album_id'], 'exist', 'skipOnError' => true, 'targetClass' => Enterprise::className(), 'targetAttribute' => ['album_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ePhoto_id' => 'E Photo ID',
            'album_id' => 'Album ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEPhoto()
    {
        return $this->hasOne(Ephoto::className(), ['id' => 'ePhoto_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlbum()
    {
        return $this->hasOne(Enterprise::className(), ['id' => 'album_id']);
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pAlbum_photo_mn".
 *
 * @property integer $photo_id
 * @property integer $poster_id
 *
 * @property PosterPhoto $photo
 * @property Poster $poster
 */
class PAlbumPhotoMn extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pAlbum_photo_mn';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['photo_id', 'poster_id'], 'required'],
            [['photo_id', 'poster_id'], 'integer'],
            [['photo_id'], 'exist', 'skipOnError' => true, 'targetClass' => PosterPhoto::className(), 'targetAttribute' => ['photo_id' => 'id']],
            [['poster_id'], 'exist', 'skipOnError' => true, 'targetClass' => Poster::className(), 'targetAttribute' => ['poster_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'photo_id' => 'Photo ID',
            'poster_id' => 'Poster ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhoto()
    {
        return $this->hasOne(PosterPhoto::className(), ['id' => 'photo_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPoster()
    {
        return $this->hasOne(Poster::className(), ['id' => 'poster_id']);
    }
}

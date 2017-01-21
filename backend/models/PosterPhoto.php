<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posterPhoto".
 *
 * @property integer $id
 * @property string $title
 * @property string $file_url
 *
 * @property PAlbumPhotoMn[] $pAlbumPhotoMns
 * @property Poster[] $posters
 */
class PosterPhoto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posterPhoto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'file_url'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'file_url' => 'File Url',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPAlbumPhotoMns()
    {
        return $this->hasMany(PAlbumPhotoMn::className(), ['photo_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosters()
    {
        return $this->hasMany(Poster::className(), ['id' => 'poster_id'])->viaTable('pAlbum_photo_mn', ['photo_id' => 'id']);
    }
}

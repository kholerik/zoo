<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ephoto".
 *
 * @property integer $id
 * @property string $title
 * @property string $file_url
 * @property integer $status_id
 *
 * @property EalbumPhotoMn[] $ealbumPhotoMns
 * @property Enterprise[] $albums
 * @property Estatus $status
 */
class Ephoto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ephoto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status_id'], 'integer'],
            [['title', 'file_url'], 'string', 'max' => 500],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Estatus::className(), 'targetAttribute' => ['status_id' => 'id']],
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
            'status_id' => 'Status ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEalbumPhotoMns()
    {
        return $this->hasMany(EalbumPhotoMn::className(), ['ePhoto_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlbums()
    {
        return $this->hasMany(Enterprise::className(), ['id' => 'album_id'])->viaTable('ealbum_photo_mn', ['ePhoto_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Estatus::className(), ['id' => 'status_id']);
    }
}

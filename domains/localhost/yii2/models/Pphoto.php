<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pphoto".
 *
 * @property integer $id
 * @property string $photo
 *
 * @property PPhotoMn[] $pPhotoMns
 * @property Poster[] $pposters
 */
class Pphoto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pphoto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'photo' => 'Photo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPPhotoMns()
    {
        return $this->hasMany(PPhotoMn::className(), ['pphoto_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPposters()
    {
        return $this->hasMany(Poster::className(), ['id' => 'pposter_id'])->viaTable('pPhoto_mn', ['pphoto_id' => 'id']);
    }
}

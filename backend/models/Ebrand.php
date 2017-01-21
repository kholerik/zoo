<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ebrand".
 *
 * @property integer $id
 * @property string $title
 * @property string $url
 * @property integer $status_id
 *
 * @property EBrandMn[] $eBrandMns
 * @property Enterprise[] $enterprises
 * @property Estatus $status
 */
class Ebrand extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ebrand';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'url'], 'required'],
            [['id', 'status_id'], 'integer'],
            [['title', 'url'], 'string', 'max' => 255],
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
            'url' => 'Url',
            'status_id' => 'Status ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEBrandMns()
    {
        return $this->hasMany(EBrandMn::className(), ['brand_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnterprises()
    {
        return $this->hasMany(Enterprise::className(), ['id' => 'enterprise_id'])->viaTable('eBrand_mn', ['brand_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Estatus::className(), ['id' => 'status_id']);
    }
}

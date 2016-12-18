<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "eProduct".
 *
 * @property integer $id
 * @property string $title
 * @property integer $category_id
 * @property string $cost
 * @property string $url
 * @property string $photo
 * @property string $description
 * @property integer $topBlockOn_check
 * @property integer $status_id
 *
 * @property Estatus $status
 * @property EproductMn[] $eproductMns
 * @property Enterprise[] $enterprises
 */
class EProduct extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'eProduct';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'category_id', 'topBlockOn_check', 'status_id'], 'integer'],
            [['cost'], 'number'],
            [['description'], 'string'],
            [['title', 'url', 'photo'], 'string', 'max' => 255],
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
            'category_id' => 'Category ID',
            'cost' => 'Cost',
            'url' => 'Url',
            'photo' => 'Photo',
            'description' => 'Description',
            'topBlockOn_check' => 'Top Block On Check',
            'status_id' => 'Status ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Estatus::className(), ['id' => 'status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEproductMns()
    {
        return $this->hasMany(EproductMn::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnterprises()
    {
        return $this->hasMany(Enterprise::className(), ['id' => 'enterprise_id'])->viaTable('eproduct_mn', ['product_id' => 'id']);
    }
}

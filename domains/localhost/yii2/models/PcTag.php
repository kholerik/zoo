<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pc_tag".
 *
 * @property integer $id
 * @property string $name
 * @property integer $photocontest_id
 *
 * @property Photocontest $photocontest
 */
class PcTag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pc_tag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['photocontest_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
//            [['photocontest_id'], 'exist', 'skipOnError' => true, 'targetClass' => Photocontest::className(), 'targetAttribute' => ['photocontest_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'photocontest_id' => 'Photocontest ID',
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

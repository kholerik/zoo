<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ekeyword".
 *
 * @property integer $id
 * @property string $name
 * @property integer $enterprise_id
 *
 * @property Enterprise $enterprise
 */
class Ekeyword extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ekeyword';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['enterprise_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['enterprise_id'], 'exist', 'skipOnError' => true, 'targetClass' => Enterprise::className(), 'targetAttribute' => ['enterprise_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'enterprise_id' => 'Enterprise ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnterprise()
    {
        return $this->hasOne(Enterprise::className(), ['id' => 'enterprise_id']);
    }
}

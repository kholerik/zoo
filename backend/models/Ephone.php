<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ephone".
 *
 * @property integer $id
 * @property string $number
 * @property integer $enterprise_id
 *
 * @property Enterprise $enterprise
 */
class Ephone extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ephone';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['enterprise_id'], 'integer'],
            [['number'], 'string', 'max' => 50],
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
            'number' => 'Number',
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

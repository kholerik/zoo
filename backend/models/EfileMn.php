<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "efile_mn".
 *
 * @property integer $eFile_id
 * @property integer $enterprise_id
 *
 * @property Efile $eFile
 * @property Enterprise $enterprise
 */
class EfileMn extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'efile_mn';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['eFile_id', 'enterprise_id'], 'required'],
            [['eFile_id', 'enterprise_id'], 'integer'],
            [['eFile_id'], 'exist', 'skipOnError' => true, 'targetClass' => Efile::className(), 'targetAttribute' => ['eFile_id' => 'id']],
            [['enterprise_id'], 'exist', 'skipOnError' => true, 'targetClass' => Enterprise::className(), 'targetAttribute' => ['enterprise_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'eFile_id' => 'E File ID',
            'enterprise_id' => 'Enterprise ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEFile()
    {
        return $this->hasOne(Efile::className(), ['id' => 'eFile_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnterprise()
    {
        return $this->hasOne(Enterprise::className(), ['id' => 'enterprise_id']);
    }
}

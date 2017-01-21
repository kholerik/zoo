<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "efile".
 *
 * @property integer $id
 * @property string $title
 * @property string $file_url
 * @property integer $status_id
 *
 * @property Estatus $status
 * @property EfileMn[] $efileMns
 * @property Enterprise[] $enterprises
 */
class Efile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'efile';
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
    public function getStatus()
    {
        return $this->hasOne(Estatus::className(), ['id' => 'status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEfileMns()
    {
        return $this->hasMany(EfileMn::className(), ['eFile_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnterprises()
    {
        return $this->hasMany(Enterprise::className(), ['id' => 'enterprise_id'])->viaTable('efile_mn', ['eFile_id' => 'id']);
    }
}

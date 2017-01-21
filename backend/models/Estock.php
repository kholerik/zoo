<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estock".
 *
 * @property integer $id
 * @property string $title
 * @property string $icon
 * @property integer $titleIcon
 * @property integer $start_date
 * @property integer $end_date
 * @property string $text
 * @property integer $status_id
 *
 * @property Estatus $status
 * @property EstockMn[] $estockMns
 * @property Enterprise[] $enterprises
 */
class Estock extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estock';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titleIcon', 'start_date', 'end_date', 'status_id'], 'integer'],
            [['text'], 'string'],
            [['title'], 'string', 'max' => 500],
            [['icon'], 'string', 'max' => 255],
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
            'icon' => 'Icon',
            'titleIcon' => 'Title Icon',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'text' => 'Text',
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
    public function getEstockMns()
    {
        return $this->hasMany(EstockMn::className(), ['eStock_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnterprises()
    {
        return $this->hasMany(Enterprise::className(), ['id' => 'enterprise_id'])->viaTable('estock_mn', ['eStock_id' => 'id']);
    }
}

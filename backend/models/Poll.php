<?php

namespace app\models;

use app\models\query\PollQuery;
use Yii;

/**
 * This is the model class for table "poll".
 *
 * @property integer $id
 * @property string $name
 * @property integer $status_id
 *
 * @property PollStatus $status
 * @property PollVariant[] $variants
 */
class Poll extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'poll';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status_id', 'unRegistred_check', 'hideResult_check'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['statusName'], 'safe'], // временно
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => PollStatus::className(), 'targetAttribute' => ['status_id' => 'id']],
            [['status_id', 'name'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'status_id' => 'Статус',
            'statusName' => 'Статус',
            'unRegistred_check' => 'Голосование без регистрации',
            'hideResult_check'  => 'Не показывать результаты',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(PollStatus::className(), ['id' => 'status_id']);
    }

    /* Геттер (желательно)*/
    public function getStatusName() {
        return $this->status->name;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVariants()
    {
        return $this->hasMany(PollVariant::className(), ['poll_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return PollQuery the active query used by this AR class.
     */
    public static function find() //???? скорее всего для апи
    {
        return new PollQuery(get_called_class()); // PollQuery в папке Query ( app\models\Poll )????
    }

    public function extraFields()
    {
        return ['variants']; //???? скорее всего для апи
    }

    public function reset()
    {
        PollVariant::updateAll(['count' => 0], ['poll_id' => $this->id]); // Обновляем таблицу pollVariant
    }
}

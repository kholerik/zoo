<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "poll_variant".
 *
 * @property integer $id
 * @property integer $poll_id
 * @property string $value
 * @property integer $count
 *
 * @property Poll $poll
 */
class PollVariant extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'poll_variant';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['count'], 'integer'],
            [['value'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'poll_id' => 'Poll ID',
            'value' => 'Значение',
            'count' => 'Кол-во',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPoll()
    {
        return $this->hasOne(Poll::className(), ['id' => 'poll_id']);
    }

    public function vote()
    {
        return $this->updateCounters(['count' => 1]);
    }


}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pTime".
 *
 * @property integer $id
 * @property string $start_date
 * @property string $end_date
 *
 * @property PtimeMn[] $ptimeMns
 * @property Poster[] $posters
 */
class PTime extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pTime';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['start_date', 'end_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPtimeMns()
    {
        return $this->hasMany(PtimeMn::className(), ['ptime_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosters()
    {
        return $this->hasMany(Poster::className(), ['id' => 'poster_id'])->viaTable('ptime_mn', ['ptime_id' => 'id']);
    }
}

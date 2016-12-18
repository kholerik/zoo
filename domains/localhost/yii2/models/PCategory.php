<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pCategory".
 *
 * @property integer $id
 * @property string $title
 * @property string $appointment
 * @property integer $end_date
 * @property integer $icon_id
 *
 * @property Poster[] $posters
 * @property PCategoryIcon $icon
 */
class PCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pCategory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['end_date', 'icon_id'], 'integer'],
            [['title', 'appointment'], 'string', 'max' => 255],
            [['icon_id'], 'exist', 'skipOnError' => true, 'targetClass' => PCategoryIcon::className(), 'targetAttribute' => ['icon_id' => 'id']],
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
            'appointment' => 'Appointment',
            'end_date' => 'End Date',
            'icon_id' => 'Icon ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosters()
    {
        return $this->hasMany(Poster::className(), ['category_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIcon()
    {
        return $this->hasOne(PCategoryIcon::className(), ['id' => 'icon_id']);
    }
}

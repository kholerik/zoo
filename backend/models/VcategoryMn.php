<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vcategory_mn".
 *
 * @property integer $vacancy_id
 * @property integer $vcategory_id
 *
 * @property Vacancy $vacancy
 * @property Vcategory $vcategory
 */
class VcategoryMn extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vcategory_mn';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vacancy_id', 'vcategory_id'], 'required'],
            [['vacancy_id', 'vcategory_id'], 'integer'],
            [['vacancy_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vacancy::className(), 'targetAttribute' => ['vacancy_id' => 'id']],
            [['vcategory_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vcategory::className(), 'targetAttribute' => ['vcategory_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'vacancy_id' => 'Vacancy ID',
            'vcategory_id' => 'Vcategory ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVacancy()
    {
        return $this->hasOne(Vacancy::className(), ['id' => 'vacancy_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVcategory()
    {
        return $this->hasOne(Vcategory::className(), ['id' => 'vcategory_id']);
    }
}

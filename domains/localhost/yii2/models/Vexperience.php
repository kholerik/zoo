<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vexperience".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Vacancy[] $vacancies
 */
class Vexperience extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vexperience';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVacancies()
    {
        return $this->hasMany(Vacancy::className(), ['experience_id' => 'id']);
    }
}

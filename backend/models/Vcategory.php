<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vcategory".
 *
 * @property integer $id
 * @property string $name
 *
 * @property VcategoryMn[] $vcategoryMns
 * @property Vacancy[] $vacancies
 */
class Vcategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vcategory';
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
    public function getVcategoryMns()
    {
        return $this->hasMany(VcategoryMn::className(), ['vcategory_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVacancies()
    {
        return $this->hasMany(Vacancy::className(), ['id' => 'vacancy_id'])->viaTable('vcategory_mn', ['vcategory_id' => 'id']);
    }
}

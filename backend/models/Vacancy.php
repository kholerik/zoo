<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Vacancy".
 *
 * @property integer $id
 * @property string $position
 * @property integer $salary
 * @property integer $schedule_id
 * @property integer $experience_id
 * @property integer $education_id
 * @property string $description
 * @property integer $enterprise_id
 * @property string $phone
 * @property string $address
 * @property string $email
 * @property integer $status_id
 *
 * @property Enterprise $enterprise
 * @property Veducation $education
 * @property Vstatus $status
 * @property Vschedule $schedule
 * @property Vexperience $experience
 * @property VcategoryMn[] $vcategoryMns
 * @property Vcategory[] $vcategories
 */
class Vacancy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Vacancy';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['salary'], 'required'],
            [['id', 'salary', 'schedule_id', 'experience_id', 'education_id', 'enterprise_id', 'status_id'], 'integer'],
            [['description'], 'string'],
            [['position', 'phone', 'email'], 'string', 'max' => 255],
            [['address'], 'string', 'max' => 500],
            [['enterprise_id'], 'exist', 'skipOnError' => true, 'targetClass' => Enterprise::className(), 'targetAttribute' => ['enterprise_id' => 'id']],
            [['education_id'], 'exist', 'skipOnError' => true, 'targetClass' => Veducation::className(), 'targetAttribute' => ['education_id' => 'id']],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vstatus::className(), 'targetAttribute' => ['status_id' => 'id']],
            [['schedule_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vschedule::className(), 'targetAttribute' => ['schedule_id' => 'id']],
            [['experience_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vexperience::className(), 'targetAttribute' => ['experience_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'position' => 'Position',
            'salary' => 'Salary',
            'schedule_id' => 'Schedule ID',
            'experience_id' => 'Experience ID',
            'education_id' => 'Education ID',
            'description' => 'Description',
            'enterprise_id' => 'Enterprise ID',
            'phone' => 'Phone',
            'address' => 'Address',
            'email' => 'Email',
            'status_id' => 'Status ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnterprise()
    {
        return $this->hasOne(Enterprise::className(), ['id' => 'enterprise_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEducation()
    {
        return $this->hasOne(Veducation::className(), ['id' => 'education_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Vstatus::className(), ['id' => 'status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedule()
    {
        return $this->hasOne(Vschedule::className(), ['id' => 'schedule_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExperience()
    {
        return $this->hasOne(Vexperience::className(), ['id' => 'experience_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVcategoryMns() //зачем тут s?
    {
        return $this->hasMany(VcategoryMn::className(), ['vacancy_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVcategories()
    {
        return $this->hasMany(Vcategory::className(), ['id' => 'vcategory_id'])->viaTable('vcategory_mn', ['vacancy_id' => 'id']);
    }

    public function fields()
    {
        $fields = parent::fields();
        //$fields['salary'] = function (self $vacancy) { return $vacancy->salary . ' РУБ'; }; // переопределение поля
        $fields['schedule_id'] = function (self $vacancy) { return $vacancy->schedule->name; }; // переопределение поля
        $fields['experience_id'] = function (self $vacancy) { return $vacancy->experience->name; }; // переопределение поля
        $fields['education_id'] = function (self $vacancy) { return $vacancy->education->name; }; // переопределение поля
        $fields['enterprise_id'] = function (self $vacancy) { return $vacancy->enterprise->name; }; // переопределение поля
        $fields['status_id'] = function (self $vacancy) { return $vacancy->status->name; }; // переопределение поля
        return $fields;
    }

    public function extraFields() // дополнительные поля
    {
        return ['education', 'status', 'schedule', 'fullAddress']; // где fullAddress это Метод (он внизу)
    }

    public function getFullAddress()
    {
        return $this->phone . ' ' . $this->address;
    }
}

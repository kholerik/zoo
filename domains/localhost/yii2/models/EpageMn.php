<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "epage_mn".
 *
 * @property integer $enterprise_id
 * @property integer $page_id
 *
 * @property Enterprise $enterprise
 * @property EPage $page
 */
class EpageMn extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'epage_mn';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['enterprise_id', 'page_id'], 'required'],
            [['enterprise_id', 'page_id'], 'integer'],
            [['enterprise_id'], 'exist', 'skipOnError' => true, 'targetClass' => Enterprise::className(), 'targetAttribute' => ['enterprise_id' => 'id']],
            [['page_id'], 'exist', 'skipOnError' => true, 'targetClass' => EPage::className(), 'targetAttribute' => ['page_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'enterprise_id' => 'Enterprise ID',
            'page_id' => 'Page ID',
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
    public function getPage()
    {
        return $this->hasOne(EPage::className(), ['id' => 'page_id']);
    }
}

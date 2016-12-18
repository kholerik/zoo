<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "eDesign".
 *
 * @property integer $id
 * @property integer $status
 * @property string $logo
 * @property string $background
 * @property integer $tabLine_check
 * @property string $titleColor
 * @property string $statisticsColor
 * @property string $bgTabColor
 * @property string $tabColor
 * @property string $bgCounterColor
 * @property string $textCounterColor
 * @property string $countCounterColor
 *
 * @property ESlideShow[] $eSlideShows
 * @property Enterprise[] $enterprises
 */
class EDesign extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'eDesign';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'tabLine_check'], 'integer'],
            [['logo', 'background', 'titleColor', 'statisticsColor', 'bgTabColor', 'tabColor', 'bgCounterColor', 'textCounterColor', 'countCounterColor'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
            'logo' => 'Logo',
            'background' => 'Background',
            'tabLine_check' => 'Tab Line Check',
            'titleColor' => 'Title Color',
            'statisticsColor' => 'Statistics Color',
            'bgTabColor' => 'Bg Tab Color',
            'tabColor' => 'Tab Color',
            'bgCounterColor' => 'Bg Counter Color',
            'textCounterColor' => 'Text Counter Color',
            'countCounterColor' => 'Count Counter Color',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getESlideShows()
    {
        return $this->hasMany(ESlideShow::className(), ['design_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnterprises()
    {
        return $this->hasMany(Enterprise::className(), ['design_id' => 'id']);
    }
}

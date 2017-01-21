<?php

namespace app\models;

use Yii;

class Etree extends \kartik\tree\models\Tree
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'etree';
    }
}
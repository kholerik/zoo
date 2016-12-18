<?php

namespace app\models;

use mdm\admin\models\User as UserModel;
use yii\helpers\ArrayHelper;

class User extends UserModel
{
    public $role;

    public function rules()
    {
        return ArrayHelper::merge(parent::rules(), [
            ['role', 'string'],
        ]);
    }

}
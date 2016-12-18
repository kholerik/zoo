<?php

namespace app\models;

use mdm\admin\models\form\Signup as SignupForm;

class Signup extends SignupForm
{
    public function signup()
    {
        if ($user = parent::signup()) {
            $am = \Yii::$app->authManager;
            $am->assign($am->getRole('manager'), $user->id);
        }
        return $user;
    }
}
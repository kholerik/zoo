<?php
/**
 * Created by PhpStorm.
 * User: Eldo
 * Date: 15.12.2016
 * Time: 16:28
 */

namespace app\actions;

use yii\db\ActiveRecord;
use yii\web\ServerErrorHttpException;

class CreateAction extends \yii\rest\CreateAction
{
    public function run()
    {
        /* @var $model ActiveRecord */
        $model = parent::run();
        if ($model->hasErrors()) {
            throw new ServerErrorHttpException(json_encode($model->getErrors()));
        }
        return $model;
    }
}
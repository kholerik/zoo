<?php
/**
 * Created by PhpStorm.
 * User: Eldo
 * Date: 15.12.2016
 * Time: 16:28
 */

namespace app\actions;

use yii\db\ActiveRecord;

class UpdateAction extends \yii\rest\UpdateAction
{
    public function run($id)
    {
        /* @var $model ActiveRecord */
        $model = parent::run($id);
        return $model;
    }
}
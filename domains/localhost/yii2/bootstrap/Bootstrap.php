<?php
/**
 * Created by PhpStorm.
 * User: Eldo
 * Date: 15.12.2016
 * Time: 16:29
 */

namespace app\bootstrap;

use yii\base\BootstrapInterface;

class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $container = \Yii::$container;

        $container->set('yii\rest\CreateAction', 'app\actions\CreateAction');
        $container->set('yii\rest\UpdateAction', 'app\actions\UpdateAction');
    }
}
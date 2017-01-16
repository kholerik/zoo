<?php
/**
 * Created by PhpStorm.
 * User: Eldo
 * Date: 01.12.2016
 * Time: 12:13
 */

namespace app\modules\api\controllers;

use Yii;
use yii\rest\ActiveController;
use yii\httpclient\Client;

class PostController extends ActiveController
{


    public $modelClass = 'app\models\Post';

    public function actionComment()
    {
        $client = new Client();
        $response = $client->createRequest()
            ->setMethod('post')
            ->setUrl('https://www.google.com/recaptcha/api/siteverify')
            ->setData(['secret' => \app\components\MyConst::reCaptchaSecret, 'response' => Yii::, 'remoteip' => ''])
            ->send();
        if ($response->isOk) {
            $newUserId = $response->success; //"success": true|false,
        }

    }

}
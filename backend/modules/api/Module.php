<?php

namespace app\modules\api;

use yii\filters\ContentNegotiator;
use yii\web\Response;

class Module extends \yii\base\Module
{
    public function behaviors()
    {
        return [
            'contentNegotiator' => [
                'class' => ContentNegotiator::className(),
                'formats' => [
                    'application/xml' => Response::FORMAT_XML,
                    'application/json' => Response::FORMAT_JSON,
                ],
            ],
        ];
    }
}
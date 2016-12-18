<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => [
        'log',
        //'app\bootstrap\Bootstrap',
    ],
    'language' => 'ru',
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Module',
        ],
        'enterprise' => [
            'class' => 'app\modules\enterprise\Module',
        ],
        'api' => [
            'class' => 'app\modules\api\Module',
        ],
        'rbac' => [
            'class' => 'mdm\admin\Module',
            'controllerMap' => [
                'assignment' => [
                    'class' => 'mdm\admin\controllers\AssignmentController',
                    /* 'userClassName' => 'app\models\User', */
                    'idField' => 'id',
                    'usernameField' => 'username',
                ],
            ], // controller map
            'layout' => 'left-menu',
//            'mainLayout' => '@app/views/layouts/main.php',
             'mainLayout' => '@app/views/layouts/admin.php', // no forget!
        ], // rbac
        'treemanager' =>  [
            'class' => '\kartik\tree\Module',
            // other module settings, refer detailed documentation
        ],
    ], // modules

    'components' => [
        'request' => [
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ],
//            'baseUrl' => $baseUrl, // новая
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '4F2v-miGh3LgHAyLIjcaeKaRInJ6UMJc',
        ],
        /*'response' => [
            'class' => 'yii\web\Response',
            'on beforeSend' => function ($event) {
                $response = $event->sender;
                if ($response->data !== null && is_object($response->data) && $response->data instanceof \yii\base\Model && $errors = $response->data->getErrors()) {
                    $response->data = [
                        'success' => false,
                        'data' => $errors,
                    ];
                    $response->statusCode = 200;
                }
            },
        ],*/
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'loginUrl' => ['site/login'],
//            'enableAutoLogin' => true,
//            'identityClass' => 'mdm\admin\models\User',
//            'identityClass' => 'mdm\admin\models\User',
//            'loginUrl' => ['rbac/user/login'],
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\DbManager'
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),

        'urlManager' => [
//            'baseUrl' => $baseUrl,
            'enablePrettyUrl' => true,
            //'enableStrictParsing' => true, // для Рест
            'showScriptName' => false,
            'rules' => [
                //['class' => 'yii\rest\UrlRule', 'controller' => 'rest'],
                /*[
                    'class' => 'yii\web\GroupUrlRule', // not work
                    'prefix' => 'api',
                    'rules' => [
                        ['class' => 'yii\rest\UrlRule', 'controller' => 'api/vacancy', 'pluralize' => false],
                    ]
                ],*/
                ['class' => 'yii\rest\UrlRule', 'controller' => 'api/vacancy', 'pluralize' => false],
                ['class' => 'yii\rest\UrlRule', 'controller' => 'api/post', 'pluralize' => false],
            ],
        ],

    ], // компонентс
//    'as access' => [ // из за этой штуки вырубается панель дебага
//        'class' => 'mdm\admin\components\AccessControl',
//        'allowActions' => [
////            'site/*',
////            'post/index',
//            // The actions listed here will be allowed to everyone including guests.
//            // So, 'admin/*' should not appear here in the production, of course.
//            // But in the earlier stages of your development, you may probably want to
//            // add a lot of actions here until you finally completed setting up rbac,
//            // otherwise you may not even take a first step.
//        ]
//    ],
    'params' => $params,
    'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\PathController',
            'access' => ['@'],
            'root' => [
                'path' => 'uploads',
                'name' => 'Elfinder'
            ],
            'watermark' => [
                'source'         => __DIR__.'/logo.png', // Path to Water mark image
                'marginRight'    => 5,          // Margin right pixel
                'marginBottom'   => 5,          // Margin bottom pixel
                'quality'        => 95,         // JPEG image save quality
                'transparency'   => 70,         // Water mark image transparency ( other than PNG )
                'targetType'     => IMG_GIF|IMG_JPG|IMG_PNG|IMG_WBMP, // Target image formats ( bit-field )
                'targetMinPixel' => 200         // Target image minimum pixel size
            ]
        ]
    ],

];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;

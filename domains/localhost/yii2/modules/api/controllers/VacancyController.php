<?php
/**
 * Created by PhpStorm.
 * User: Eldo
 * Date: 01.12.2016
 * Time: 12:13
 */

namespace app\modules\api\controllers;

use app\models\VacancySearch;
use app\rbac\Rbac;
use yii\filters\AccessControl;
use yii\rest\ActiveController;
use yii\rest\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\ServerErrorHttpException;

class VacancyController extends Controller

{

    protected function verbs()
    {
        return [
            'test' => ['POST'],
        ];
    }
    // yii2/api/vacancy?per-page=11&page=1&fields=id,date /  для главной

    public $modelClass = 'app\models\Vacancy';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'view', 'create'],
                'rules' => [
                    [
                        'actions' => ['index', 'view'],
                        'allow' => true,
                        'roles' => [Rbac::POSTS_VIEW],
                    ],
                    [
                        'actions' => ['create'],
                        'allow' => true,
                        'roles' => [Rbac::POSTS_CREATE],
                    ],
                ],
            ],
        ];
    }

    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider']; // меняю дата провайдер на свой
        return $actions;
    }



    // мой дата провайдер
    public function prepareDataProvider()
    {
        $model = new VacancySearch();
        return $model->search(\Yii::$app->request->get());
    }
    // мой дата провайдер

    // Проверка доступа
    public function checkAccess($action, $model = null, $params = [])
    {
        if (in_array($action, ['update', 'delete'])) {
            if (!\Yii::$app->user->can(Rbac::POSTS_MANAGE, ['model' => $model])) {
                throw new ForbiddenHttpException();
            }
        }
    }
}
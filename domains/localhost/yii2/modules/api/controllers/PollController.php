<?php
/**
 * Created by PhpStorm.
 * User: Eldo
 * Date: 01.12.2016
 * Time: 12:13
 */

namespace app\modules\api\controllers;

use app\models\Poll;
use app\models\PollVariant;
use Yii;
use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;
use yii\web\Cookie;
use yii\web\ForbiddenHttpException;
use yii\web\HttpException;
use yii\web\NotFoundHttpException;
use yii\web\ServerErrorHttpException;
use yii\web\UnauthorizedHttpException;

class PollController extends ActiveController
{



    // yii2/api/pool?per-page=11&page=1&expand=variants /  для главной

    public $modelClass = 'app\models\Poll';

    protected function verbs()
    {
        return [
            'test' => ['POST'],
        ];
    }


    public function actions()
    {

        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider']; // заменяю провайдер на свой
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider']; // заменяю провайдер на свой
        return $actions;
    }

//    public function beforeAction($action) {
//        $this->enableCsrfValidation = false;
//        return parent::beforeAction($action);
//    }

    public function prepareDataProvider() // мой список данных
    {
        return new ActiveDataProvider([
            'query' => Poll::find()->active()->orderBy(['id' => SORT_DESC]), // active - берётся из models/query/PollQuery.php
        ]);
    }

    public function actionVote($id)
    {

        $request = Yii::$app->request;
        $response = Yii::$app->response;

        $poll = Poll::find()->where(['id' => $id])->one();

        $variant = $this->findVariantModel($poll->id, $request->getBodyParam('variant'));

        $key = 'vote_' . $poll->id;

        if (isset($request->cookies[$key])) {

            throw new ForbiddenHttpException('Уже голосовал');

        } else { // если ешё не голосовал

            if ($poll->unRegistred_check == 1 OR !Yii::$app->user->isGuest ){ // если разрешено голосовать всем или пользователь не гость

                if (!$variant->vote()) {
                    throw new ServerErrorHttpException('Voting error.');
                }

                $response->cookies->add(new Cookie([
                    'name' => $key,
                    'value' => 1,
                    'expire' => time() + 3600 * 24 * 30 * 12, // год (примерно)
                ]));

                return array(
                    "status" => 'success',
                );

            } else {

                throw new UnauthorizedHttpException('Гостям голосовать нельзя');

            }

        }

    }



    /**
     * @param $id
     * @return mixed
     * @throws NotFoundHttpException
     */
    protected function findModel($id)
    {
        if (($model = Poll::find()->active()->andWhere(['id' => $id])->one()) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested poll does not exist.');
        }
    }

    protected function findVariantModel($pollId, $id)
    {
        if (($model = PollVariant::findOne(['id' => $id, 'poll_id' => $pollId])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('Не найдено варианта ответа с переданным id.');
        }
    }
}
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
use yii\web\NotFoundHttpException;
use yii\web\ServerErrorHttpException;

class Poll2Controller extends ActiveController
{
    // yii2/api/pool?per-page=11&page=1&expand=variants /  для главной

    public $modelClass = 'app\models\Poll';

    protected function verbs()
    {
        return [
            'test' => ['POST'],
        ];
    }

    function beforeAction($action)
    {
        \Yii::$app->response->cookies->add(new \yii\web\Cookie([
            'name' => 'QQQQQQteaaaaaaastaaaaaaaaaaaaaaaaaaaaaaaaaaaa1',
            'value' => 'QQQQQQQQteaaaaaaastVaaaaaaaaaaaaluaaaaaaaaaaaaaae1'
        ]));
        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }

    public function afterAction($action, $result)
    {
//        print_r($_REQUEST);
//        print_r($_POST);
//        print_r($_COOKIE);
//        echo 111;
        $request = Yii::$app->request;
        $response = Yii::$app->response;

        return parent::afterAction($action, $result); // TODO: Change the autogenerated stub

    }

    public function actions()
    {

        Yii::$app->response->cookies->add(new \yii\web\Cookie([
            'name' => 'test',
            'value' => 'testValue'
        ]));

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

//    public function actionVote($id)
    public function actionVote()
    {

//
//// В view выводим куки
//        echo Yii::$app->request->cookies['test'];
//// или
//        echo Yii::$app->request->cookies->getValue('test');
//        die();
//        if (!isset(Yii::$app->request->cookies['test'])) {

//        }
//        return Yii::$app->request;
//        return Yii::$app->request;
//        return $_COOKIE;

        Yii::$app->response->cookies->add(new \yii\web\Cookie([
            'name' => 'testqqqqqqqqqqqqqqq',
            'value' => 'testValueqqqqqqqqqqqqq'
        ]));
        $request = Yii::$app->request;
        $response = Yii::$app->response;



//        print_r(Yii::$app->request->method); die();
//        print_r( $request->cookies );
//
////        print_r( $request->post() ); die();
//        $poll = $this->findModel($request->getBodyParam('id'));
////        $poll = Poll::find()->where(['id' => $id])->one();
//
////        print_r( Yii::$app->request->method ); die();
//        $variant = $this->findVariantModel($poll->id, $request->getBodyParam('variant'));
////        $variant = PollVariant::find()->where(['id' => $poll->id])->one();
//
//
//        $key = 'vote_' . $poll->id;
////        print_r($request->cookies->get($key) . 33); die();
////        print_r(   $request->cookies->has($key) ); die();
//        if (!isset($request->cookies[$key])) {
////            print_r(22); die();
//            if (!$variant->vote()) {
//                throw new ServerErrorHttpException('Voting error.');
//            }
//            $response->cookies->add(new Cookie([
//                'name' => $key,
//                'value' => 1,
//                'expire' => time() + 3600 * 24 * 30 * 12, // год (примерно)
//            ]));
//            $variant->count++;
//            $variant->save();
//        }
//
//
//        return var_dump($variant->count ) . 333;
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

//    protected function findVariantModel($pollId, $id)
//    {
////        print_r($pollId . '/' . $id);
//        if (($model = PollVariant::findOne(['id' => $id, 'poll_id' => $pollId])) !== null) {
//            return $model;
//        } else {
//            throw new NotFoundHttpException('Не найдено ни одного варианта ответа.');
//        }
//    }
}
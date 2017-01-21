<?php
/**
 * Created by PhpStorm.
 * User: Eldo
 * Date: 20.10.2016
 * Time: 21:52
 */

namespace app\controllers;

//use rico\yii2images;

use app\models\Post;
use app\models\Polls;
//use pollext\poll;
use pollext\poll\Poll;
use yii\web\Controller;

class PostController extends Controller
{
    /**
     * @return mixed
     */
    public function actionIndex() {

        $model = Post::find()->all();
//        $poll = Polls::find()->where( 'post_id' == $item->id )->all();
//        $x = new xa;
//        $model[0]->poll = 11;

//        $x->a = $poll;
//        if ($poll)
//            $model->poll = $poll;
        $i = 0;
        $polls = []; $images = [];
//        foreach ($model as $item) {
//
//////            $poll = Polls::find()->where( ['post_id' => $item->id ])->all();
//////            $poll[0]->poll_name != '' ? $polls[$item->id] = $poll[0]->poll_name  : $polls[$item->id] = '';
////            $image = $model[$i]->getImage();
////            $image = $image->getUrl('400x400');
////            $image1part = explode('?item=', $image)[1];
////            $imageUrl = str_replace( '&dirtyAlias=', '/', $image1part );
////            $imageUrlFull = "http://$_SERVER[HTTP_HOST]/uploads/yii2-images/cache/Posts/$imageUrl";
////            $file = "$_SERVER[DOCUMENT_ROOT]/uploads/yii2-images/cache/Posts/$imageUrl";
////            if ( file_exists($file ) ) {
////                $images[$i] = $imageUrlFull;
////            } else {
////                $imageName = explode('&dirtyAlias=', $image)[1];
////                $images[$i] = "http://$_SERVER[HTTP_HOST]/uploads/yii2-images/cache/placeHolder/$imageName";
////            }
//            $i++;
//        }

        
        return $this->render('index', compact('model', 'polls', 'images'));

    }
    /**
     * @return mixed
     */
    public function actionInterview() {

        $model = Post::find()->where(['type_id' => 'interview'])->all();
        return $this->render('interview', compact('model'));

    }
    /**
     * @return mixed
     */
    public function actionReview() {

        $model = Post::find()->where(['type_id' => 'review'])->all();
        return $this->render('review', compact('model'));

    }
    /**
     * @return mixed
     */
    public function actionOpinion() {

        $model = Post::find()->where(['type_id' => 'opinion'])->all();
        return $this->render('opinion', compact('model'));

    }

    public function actionReportage() {

        $model = Post::find()->where(['type_id' => 'reportage'])->all();
        return $this->render('reportage', compact('model'));

    }



    public function actionImportantNews() {

        $model = Post::find()->where(['importantNewsCheck' => '1'])->all();
        return $this->render('index', compact('model'));

    }


    public $layout = "post";



}
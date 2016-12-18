<?php

namespace app\modules\admin\controllers;

use pollext\poll\Poll;
use yii;
use app\models\Img;
use app\models\ImgSearch;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PostController implements the CRUD actions for Post model.
 */
class ImgController extends Controller
{


    /**
     * @inheritdoc
     */


    public function actions()
    {
//        print_r(Yii::getAlias('@frontend')); die();
        return [
            'uploadPhoto' => [
                'class' => 'budyaga\cropper\actions\UploadAction',
                'url' => 'http://yii2/uploads/user/photo',
                'path' => '@app/web/uploads/user/photo',
            ]
        ];
    }




    public function actionIndex()
    {
        $searchModel = new PostSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
//        print_r($searchModel);

//        $model = new Post();
//        $img = $model->getImage();

//        print_r($img); die();


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Post model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }




    public function actionCreate()
    {
        $model = new Img();

        if ($model->load(Yii::$app->request->post()) AND $model->validate() AND $model->save()) {


            return $this->redirect(['index']);

        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }



    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $model->image = \yii\web\UploadedFile::getInstance($model, 'image');
//
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Post model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {

        $model = $this->findModel($id);

        if( !Yii::$app->user->can('редактированиеСвоихПостов', ['post' => $model ]) ) {
            throw new ForbiddenHttpException('Вам сюда нельзя');
        }

        $model->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Img the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Img::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


    public  $layout  = 'news';



}





<?php

namespace app\modules\admin\controllers;

use app\rbac\Rbac;
use pollext\poll\Poll;
use Yii;
use app\models\Post;
use app\models\PostSearch;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PostController implements the CRUD actions for Post model.
 */
class PostController extends Controller
{


    public function actions()
    {
        return [
            'image-upload' => [
//                'class' => 'vova07\imperavi\actions\UploadAction', // редактор визуальный
                'class' => 'app\components\vova07UploadAction', // редактор визуальный
//                'url' => 'http://yii2/uploads/', // Directory URL address, where files are stored.
                'url' => Url::home(true) . 'uploads/post/', // Directory URL address, where files are stored.
                'path' => '@uploads/post/' // Or absolute path to directory where files are stored.
            ],
            'uploadPhoto' => [
//                'class' => 'budyaga\cropper\actions\UploadAction', // для миниатюры
                'class' => 'app\components\budyagaCropperUploadAction', // для миниатюры
//                'class' => '\components\myUploadAction',
                'url' => Url::home(true) . 'uploads/post/',
                'path' => '@uploads/post/',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
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
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }


    

    /**
     * Lists all Post models.
     * @return mixed
     */
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

    /**
     * Creates a new Post model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
//    public function actionCreate()
//    {
//        $model = new Post();
//
//        if (   $model->load( Yii::$app->request->post() )   ) {
//
//            $model -> user_id = Yii::$app->user->id;
//
//            if ($model->validate() && $model->save()) {
//
//                $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
//                if ($model->imageFile) {
//                    $model->upload();
//                }
//                return $this->redirect(['index']);
//            }
//        } else {
//            return $this->render('create', [
//                'model' => $model,
//            ]);
//        };
//    }




    public function actionCreate()
    {
        $model = new Post();
//        $this->myPostId = $model->id;
//        print_r($this->myPostId); die();
//        $model2 = new Categories();
//        $model2 = $model2->find();
//        print_r( $model2->find()->all() ); die();

        if ($model->load(Yii::$app->request->post()) AND $model->validate() AND $model->save()) {

            if ($model->questionnaire) { // Если есть опрос
                Poll::widget([
                    'pollName'=>"$model->questionnaire",
                    'answerOptions'=> explode('/', $model->questions), // Варианты ответов
                    'post_id' => $model->id,
              ]);
            }; // Если есть опрос

//            $myclass = new components\MyClass();
//            $myclass->imgUploadUpdate($model);

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

        if (!Yii::$app->user->can(Rbac::POSTS_MANAGE, ['model' => $model])) {
            throw new ForbiddenHttpException();
        }

//        $this->myPostId = $model->id;
        if ($model->load(Yii::$app->request->post() )  AND $model->validate() AND $model->save() ) {
//            print_r($model); die();

//            $myclass = new components\MyClass();
//            $myclass->imgUploadUpdate($model);
            //$model->description = $newModel->description;
            //$model->save();

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionDelete($id)
    {
        $model = $this->findModel($id);

        if (!Yii::$app->user->can(Rbac::POSTS_MANAGE, ['model' => $model])) {
            throw new ForbiddenHttpException();
        }

        $model->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }





}





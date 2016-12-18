<?php

use app\rbac\Rbac;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//echo "<img src=" . $img->getUrl() . " alt=''>";

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;

//$images = $model->getImage();
//print_r()); die();
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php if (Yii::$app->user->can(Rbac::POSTS_CREATE)): ?>
        <p>
            <?= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php endif; ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'category_id',
            'title',
            'slogan:html',
            'description:html',
            //'user_id',
            'type_id',
            'at_date',
            'author',
            'source_url:url',
            'source_name',
            'status_id',
//            'questionnaire:ntext',
            'commentsOn_check',
            'regionNews_check',
            'importantNews_check',
            'pressRelease_check',
            'adult_check',
            'miniature_url:html',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

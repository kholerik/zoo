<?php

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

    <p>
        <?= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category_name',
            'title',
            'slogan:html',
            'description:html',
            //'user_id',
            'type',
            'at_date',
            'author',
            'sourceUrl:url',
            'sourceName',
            'status',
            'questionnaire:ntext',
            'commentsOn',
            'regionNewsCheck',
            'importantNewsCheck',
            'PressReleaseCheck',
            'adult',
//            'imageFile',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

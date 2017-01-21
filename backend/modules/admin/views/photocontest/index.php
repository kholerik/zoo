<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PhotocontestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Photocontests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photocontest-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Photocontest', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'preview_w',
            'preview_h',
            'text:ntext',
            // 'title_id',
            // 'partner:ntext',
            // 'parnerType_id',
            // 'onePhoto_check',
            // 'comment_check',
            // 'vote_check',
            // 'voteGuest_check',
            // 'vote_end',
            // 'voteStop_check',
            // 'noViewVote_check',
            // 'deleteVote_check',
            // 'onIndexPage_check',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

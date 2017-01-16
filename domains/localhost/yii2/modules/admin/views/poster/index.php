<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poster-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Poster', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category_id',
            'title',
            'shortDescription',
            'child_check:boolean',
            // 'master_check',
            // 'meet_check',
            // 'priority_check',
            // 'adBlock_check',
            // 'socNet_check',
            // 'age_id',
            // 'noAge_check',
            // 'place',
            // 'format_id',
            // 'description:ntext',
            // 'photo',
            // 'video',
            // 'video2',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

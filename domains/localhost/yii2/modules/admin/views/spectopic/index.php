<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Spectopics';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spectopic-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Spectopic', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'create_date',
            'end_date',
            'miniature_url:url',
            // 'description:ntext',
            // 'plashka_text',
            // 'plashka_color',
            // 'keywords',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

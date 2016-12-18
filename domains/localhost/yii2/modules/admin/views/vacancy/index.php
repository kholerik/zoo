<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vacancies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vacancy-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Vacancy', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'position',
            'salary',
            'schedule_id',
            'experience_id',
            // 'education_id',
            // 'description:ntext',
            // 'enterprise_id',
            // 'phone',
            // 'address',
            // 'email:email',
            // 'status_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

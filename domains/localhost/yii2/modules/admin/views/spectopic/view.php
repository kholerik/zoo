<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Spectopic */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Spectopics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spectopic-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'create_date',
            'end_date',
            'miniature_url:url',
            'description:ntext',
            'plashka_text',
            'plashka_color',
            'keywords',
        ],
    ]) ?>

</div>

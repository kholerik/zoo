<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Spectopic */

$this->title = 'Update Spectopic: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Spectopics', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="spectopic-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

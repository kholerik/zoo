<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Photocontest */

$this->title = 'Create Photocontest';
$this->params['breadcrumbs'][] = ['label' => 'Photocontests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photocontest-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

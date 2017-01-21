<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Spectopic */

$this->title = 'Create Spectopic';
$this->params['breadcrumbs'][] = ['label' => 'Spectopics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spectopic-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

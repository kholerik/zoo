<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PostSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'category_name') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'slogan') ?>

    <?= $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'at_date') ?>

    <?php // echo $form->field($model, 'author') ?>

    <?php // echo $form->field($model, 'sourceUrl') ?>

    <?php // echo $form->field($model, 'sourceName') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'questionnaire') ?>

    <?php // echo $form->field($model, 'commentsOn') ?>

    <?php // echo $form->field($model, 'regionNewsCheck') ?>

    <?php // echo $form->field($model, 'importantNewsCheck') ?>

    <?php // echo $form->field($model, 'PressReleaseCheck') ?>

    <?php // echo $form->field($model, 'adult') ?>

    <?php // echo $form->field($model, 'miniature') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

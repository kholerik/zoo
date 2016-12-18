<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PosterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="poster-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'category_id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'shortDescription') ?>

    <?= $form->field($model, 'child_check') ?>

    <?php // echo $form->field($model, 'master_check') ?>

    <?php // echo $form->field($model, 'meet_check') ?>

    <?php // echo $form->field($model, 'priority_check') ?>

    <?php // echo $form->field($model, 'adBlock_check') ?>

    <?php // echo $form->field($model, 'socNet_check') ?>

    <?php // echo $form->field($model, 'age_id') ?>

    <?php // echo $form->field($model, 'noAge_check') ?>

    <?php // echo $form->field($model, 'place') ?>

    <?php // echo $form->field($model, 'format_id') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'album_id') ?>

    <?php // echo $form->field($model, 'video') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

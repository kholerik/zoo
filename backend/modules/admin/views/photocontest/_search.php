<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PhotocontestSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="photocontest-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'preview_w') ?>

    <?= $form->field($model, 'preview_h') ?>

    <?= $form->field($model, 'text') ?>

    <?php // echo $form->field($model, 'title_id') ?>

    <?php // echo $form->field($model, 'partner') ?>

    <?php // echo $form->field($model, 'parnerType_id') ?>

    <?php // echo $form->field($model, 'onePhoto_check') ?>

    <?php // echo $form->field($model, 'comment_check') ?>

    <?php // echo $form->field($model, 'vote_check') ?>

    <?php // echo $form->field($model, 'voteGuest_check') ?>

    <?php // echo $form->field($model, 'vote_end') ?>

    <?php // echo $form->field($model, 'voteStop_check') ?>

    <?php // echo $form->field($model, 'noViewVote_check') ?>

    <?php // echo $form->field($model, 'deleteVote_check') ?>

    <?php // echo $form->field($model, 'onIndexPage_check') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

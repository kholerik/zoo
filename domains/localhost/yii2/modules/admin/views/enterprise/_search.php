<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EnterpriseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="enterprise-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'shortName') ?>

    <?= $form->field($model, 'logo') ?>

    <?= $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'category_id') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'tariff_id') ?>

    <?php // echo $form->field($model, 'representative') ?>

    <?php // echo $form->field($model, 'workTime') ?>

    <?php // echo $form->field($model, 'siteUrl') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'icq') ?>

    <?php // echo $form->field($model, 'skype') ?>

    <?php // echo $form->field($model, 'commentsOn_check') ?>

    <?php // echo $form->field($model, 'emailAlert') ?>

    <?php // echo $form->field($model, 'emailAlert_check') ?>

    <?php // echo $form->field($model, 'post_id') ?>

    <?php // echo $form->field($model, 'stock_id') ?>

    <?php // echo $form->field($model, 'album_id') ?>

    <?php // echo $form->field($model, 'albumName') ?>

    <?php // echo $form->field($model, 'servise_id') ?>

    <?php // echo $form->field($model, 'design_id') ?>

    <?php // echo $form->field($model, 'socnet_id') ?>

    <?php // echo $form->field($model, 'address_id') ?>

    <?php // echo $form->field($model, 'block_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

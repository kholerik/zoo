<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pcategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pcategory-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'appointment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'end_date')->textInput() ?>

    <?= $form->field($model, 'icon_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

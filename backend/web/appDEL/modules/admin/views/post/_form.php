<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slogan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'type')->dropDownList([ 'interview' => 'Interview', 'review' => 'Review', 'opinion' => 'Opinion', 'reportage' => 'Reportage', 'project' => 'Project', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'at_date')->textInput() ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sourceUrl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sourceName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'draft' => 'Draft', 'expect' => 'Expect', 'public' => 'Public', 'delete' => 'Delete', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'questionnaire')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'commentsOn')->textInput() ?>

    <?= $form->field($model, 'regionNewsCheck')->textInput() ?>

    <?= $form->field($model, 'importantNewsCheck')->textInput() ?>

    <?= $form->field($model, 'PressReleaseCheck')->textInput() ?>

    <?= $form->field($model, 'adult')->textInput() ?>

    <?= $form->field($model, 'miniature')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

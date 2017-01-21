<?php

use dosamigos\datetimepicker\DateTimePicker;
use vova07\imperavi\Widget as imperavi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Poster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="poster-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\PCategory::find()->all(), 'id', 'name')) ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shortDescription')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'child_check')->checkbox() ?>

    <?= $form->field($model, 'master_check')->checkbox() ?>

    <?= $form->field($model, 'meet_check')->checkbox() ?>

    <?= $form->field($model, 'priority_check')->checkbox() ?>

    <?= $form->field($model, 'adBlock_check')->checkbox() ?>

    <?= $form->field($model, 'socNet_check')->checkbox() ?>

    <?= $form->field($model, 'age_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\PAge::find()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'noAge_check')->checkbox() ?>

    <?= $form->field($model, 'place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'format_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\PFormat::find()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'description')->widget(imperavi::className(), [
//        'post_id' => $model->id,
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 200,
//            'imageManagerJson' => Url::to(['/admin/post/images-get']),
            'imageUpload' => Url::to(['/admin/post/image-upload']),
            'plugins' => [
//                'clips',
//                'imagemanager'
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'video')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'video2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_start')->widget(DateTimePicker::className(), [
        'language' => 'ru',
        'size' => 'ms',
        'template' => '{input}',
        'pickButtonIcon' => 'glyphicon glyphicon-time',
        'inline' => false,
        'clientOptions' => [
            'startView' => 2,
            'minView' => 0,
            'maxView' => 1,
            'autoclose' => true,
            'linkFormat' => 'HH:ii P', // if inline = true
            // 'format' => 'HH:ii P', // if inline = false
            'todayBtn' => true
        ]
    ]);?>

    <?= $form->field($model, 'date_end')->widget(DateTimePicker::className(), [
        'language' => 'ru',
        'size' => 'ms',
        'template' => '{input}',
        'pickButtonIcon' => 'glyphicon glyphicon-time',
        'inline' => false,
        'clientOptions' => [
            'startView' => 2,
            'minView' => 0,
            'maxView' => 1,
            'autoclose' => true,
            'linkFormat' => 'HH:ii P', // if inline = true
            // 'format' => 'HH:ii P', // if inline = false
            'todayBtn' => true
        ]
    ]);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

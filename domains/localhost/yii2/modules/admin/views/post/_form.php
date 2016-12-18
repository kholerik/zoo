<?php

use moonland\tinymce\TinyMCE;
use vova07\imperavi\Widget as imperavi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
//use mihaildev\ckeditor\CKEditor;
//use mihaildev\elfinder\ElFinder; // для закачки фото в редактор
//use mihaildev\elfinder\ElFinder; // для закачки фото в редактор
use dosamigos\datetimepicker\DateTimePicker;
use budyaga\cropper\Widget as budyaga;

mihaildev\elfinder\Assets::noConflict($this);

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */

?>

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'category_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Categories::find()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'user_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\User::find()->all(), 'id', 'username')) ?>

    <?= $form->field($model, 'at_date')->widget(DateTimePicker::className(), [
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

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>


    <?php
//    print_r(Url::to(['/module/admin/post/image-upload'])); die();
    echo $form->field($model, 'description')->widget(imperavi::className(), [
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

    <?= $form->field($model, 'type_id')->dropDownList([ 'interview' => 'Interview', 'review' => 'Review', 'opinion' => 'Opinion', 'reportage' => 'Reportage', 'project' => 'Project', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'source_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'source_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'poll_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Poll::find()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'status_id')->dropDownList([ 'draft' => 'Draft', 'expect' => 'Expect', 'public' => 'Public', 'delete' => 'Delete', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'questionnaire')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'questions')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'commentsOn_check')->checkbox() ?>

    <?= $form->field($model, 'regionNews_check')->checkbox() ?>

    <?= $form->field($model, 'importantNews_check')->checkbox() ?>

    <?= $form->field($model, 'pressRelease_check')->checkbox() ?>

    <?= $form->field($model, 'waterMark_check')->checkbox() ?>

    <?= $form->field($model, 'adult_check')->checkbox() ?>

    <?= $form->field($model, 'miniature_url')->widget(budyaga::className(), [
        'uploadUrl' => Url::toRoute(['/admin/post/uploadPhoto']),
    ])?>

    <?= $form->field($model, 'miniature_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hotNew_check')->checkbox() ?>

    <?= $form->field($model, 'specTopic_id')->checkboxList(\app\models\Spectopic::find()->select(['title', 'id'])->indexBy('id')->column()) ?>

    <?= $form->field($model, 'metaKeyword')->textInput(['maxlength' => true]) ?>

    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

    <?php ActiveForm::end(); ?>

</div>
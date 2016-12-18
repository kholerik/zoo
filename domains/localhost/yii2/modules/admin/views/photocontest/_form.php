<?php

use dosamigos\datetimepicker\DateTimePicker;
use Imagine\Image\Box;
use yii\helpers\Html;
use yii\imagine\Image;
use yii\widgets\ActiveForm;
use zxbodya\yii2\galleryManager\GalleryManager;

/* @var $this yii\web\View */
/* @var $model app\models\Photocontest */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="photocontest-form">

    <?php $form = ActiveForm::begin(); ?>

    <?//= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'preview_w')->textInput() ?>

    <?= $form->field($model, 'preview_h')->textInput() ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

<!--    --><?//= $form->field($model, 'title_id')->textInput()?>

    <?= $form->field($model, 'title_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Pctitle::find()->all(), 'id', 'name')) ?>

    <?php
    if ($model->isNewRecord) {
        echo '<br><b style="color: orange">Загрузить изображения можно только для уже созданной записи</b><br><br>';
    } else {
        echo GalleryManager::widget(
            [
                'model' => $model,
                'behaviorName' => 'galleryBehavior',
                'apiRoute' => 'photocontest/galleryApi'
            ]
        );
    }

//    $img = Image::getImagine()->open(Yii::getAlias('@webroot/uploads/test.jpg'));
//    $img->thumbnail(new Box(100, 100))->save(Yii::getAlias('@webroot/uploads/test1.jpg'));

    ?>

    <?= $form->field($model, 'partner')->textarea(['rows' => 6]) ?>

<!--    --><?//= $form->field($model, 'partnerType_id')->textInput() ?>

        <?= $form->field($model, 'partnerType_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Pcpartner::find()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'onePhoto_check')->checkbox() ?>

    <?= $form->field($model, 'comment_check')->checkbox() ?>

    <?= $form->field($model, 'vote_check')->checkbox() ?>

    <?= $form->field($model, 'voteGuest_check')->checkbox() ?>

    <?= $form->field($model, 'vote_end')->widget(DateTimePicker::className(), [
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

    <?= $form->field($model, 'voteStop_check')->checkbox() ?>

    <?= $form->field($model, 'noViewVote_check')->checkbox() ?>

    <?= $form->field($model, 'deleteVote_check')->checkbox() ?>

    <?= $form->field($model, 'onIndexPage_check')->checkbox() ?>

    <?= $form->field($model, 'tags')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Vacancy */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vacancy-form">

    <?php $form = ActiveForm::begin(); ?>

<!--    --><?//= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'salary')->textInput() ?>

    <?= $form->field($model, 'schedule_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Vschedule::find()->all(), 'id', 'name')) ?>
    <?= $form->field($model, 'experience_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Vexperience::find()->all(), 'id', 'name')) ?>
    <?= $form->field($model, 'education_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Veducation::find()->all(), 'id', 'name')) ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'enterprise_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Enterprise::find()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'status_id')->textInput() ?>

    <?= $form->field($model, 'status_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Vstatus::find()->all(), 'id', 'name')) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

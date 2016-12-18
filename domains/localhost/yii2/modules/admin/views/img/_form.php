<?php
use budyaga\cropper\Widget;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
/* @var $model app\models\Img */
/* @var $form yii\widgets\ActiveForm */
?>


<?php $form = ActiveForm::begin(['id' => 'form-profile']); ?>
<?php echo $form->field($model, 'photo')->widget(Widget::className(), [
    'uploadUrl' => Url::toRoute('/user/user/uploadPhoto'),
]) ?>
<div class="form-group">
    <?php echo Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>

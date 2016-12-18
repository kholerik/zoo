<?php

use app\models\Etree;
use kartik\tree\TreeView;
use kartik\tree\TreeViewInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Enterprise */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="enterprise-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shortName')->textInput() ?>

    <?= $form->field($model, 'logo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'category_id')->textInput() ?>

    <?php
    echo TreeView::widget([
        // single query fetch to render the tree
        'query'             => Etree::find()->addOrderBy('root, lft'),
        'headingOptions'    => ['label' => 'Categories'],
        'isAdmin'           => false,                       // optional (toggle to enable admin mode)
        'displayValue'      => 1,                           // initial display value
        //'softDelete'      => true,                        // normally not needed to change
        //'cacheSettings'   => ['enableCache' => true]      // normally not needed to change
    ]);
    echo TreeViewInput::widget([
        // single query fetch to render the tree
        'query'             => Etree::find()->addOrderBy('root, lft'),
        'headingOptions'    => ['label' => 'Categories'],
        'name'              => 'kv-product',    // input name
        'value'             => '1,2,3',         // values selected (comma separated for multiple select)
        'asDropdown'        => true,            // will render the tree input widget as a dropdown.
        'multiple'          => true,            // set to false if you do not need multiple selection
        'fontAwesome'       => true,            // render font awesome icons
        'rootOptions'       => [
            'label' => '<i class="fa fa-tree"></i>',
            'class'=>'text-success'
        ],                                      // custom root label
        //'options'         => ['disabled' => true],
    ]);
    ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'tariff_id')->textInput() ?>

    <?= $form->field($model, 'representative')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'workTime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'siteUrl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icq')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'commentsOn_check')->textInput() ?>

    <?= $form->field($model, 'emailAlert')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emailAlert_check')->textInput() ?>

    <?= $form->field($model, 'post_id')->textInput() ?>

    <?= $form->field($model, 'stock_id')->textInput() ?>

    <?= $form->field($model, 'album_id')->textInput() ?>

    <?= $form->field($model, 'albumName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'servise_id')->textInput() ?>

    <?= $form->field($model, 'design_id')->textInput() ?>

    <?= $form->field($model, 'socnet_id')->textInput() ?>

    <?= $form->field($model, 'address_id')->textInput() ?>

    <?= $form->field($model, 'block_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

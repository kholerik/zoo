<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Enterprise */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Enterprises', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enterprise-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'shortName',
            'logo',
            'phone',
            'category_id',
            'user_id',
            'tariff_id',
            'representative',
            'workTime',
            'siteUrl:url',
            'email:email',
            'icq',
            'skype',
            'commentsOn_check',
            'emailAlert:email',
            'emailAlert_check:email',
            'post_id',
            'stock_id',
            'album_id',
            'albumName',
            'servise_id',
            'design_id',
            'socnet_id',
            'address_id',
            'block_id',
        ],
    ]) ?>

</div>

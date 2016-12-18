<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EnterpriseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Enterprises';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enterprise-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Enterprise', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'shortName',
            'logo',
            'phone',
            // 'category_id',
            // 'user_id',
            // 'tariff_id',
            // 'representative',
            // 'workTime',
            // 'siteUrl:url',
            // 'email:email',
            // 'icq',
            // 'skype',
            // 'commentsOn_check',
            // 'emailAlert:email',
            // 'emailAlert_check:email',
            // 'post_id',
            // 'stock_id',
            // 'album_id',
            // 'albumName',
            // 'servise_id',
            // 'design_id',
            // 'socnet_id',
            // 'address_id',
            // 'block_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

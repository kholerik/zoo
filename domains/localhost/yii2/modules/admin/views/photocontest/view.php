<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Photocontest */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Photocontests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photocontest-view">

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
            'title',
            'preview_w',
            'preview_h',
            'text:ntext',
            'title_id',
            'partner:ntext',
            'partnerType_id',
            'onePhoto_check',
            'comment_check',
            'vote_check',
            'voteGuest_check',
            'vote_end',
            'voteStop_check',
            'noViewVote_check',
            'deleteVote_check',
            'onIndexPage_check',
        ],
    ]) ?>

</div>

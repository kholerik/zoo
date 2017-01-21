<?php

use app\rbac\Rbac;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->user->can(Rbac::POSTS_MANAGE, ['model' => $model])): ?>
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
    <?php endif; ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'category_id',
            'title',
            'slogan:html',
            'description:html',
            //'user_id',
            'type_id',
            'at_date',
            'author',
            'source_url:url',
            'source_name',
            'status_id',
//            'questionnaire:ntext',
            'commentsOn_check',
            'regionNews_check',
            'importantNews_check',
            'pressRelease_check',
            'adult_check',
            'miniature_desc',
            'miniature_url:image',
        ],
    ]) ?>

</div>

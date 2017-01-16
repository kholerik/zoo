<?php

/* @var $this \yii\web\View */
/* @var $content string */

use mdm\admin\components\Helper;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\widgets\Menu;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">


    <?php

    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
        ['label' => 'Login', 'url' => ['/user/login']],
        [
            'label' => 'Logout (' . \Yii::$app->user->identity->username . ')',
            'url' => ['/user/logout'],
            'linkOptions' => ['data-method' => 'post']
        ],
        ['label' => 'App', 'items' => [
            ['label' => 'New Sales', 'url' => ['/sales/pos']],
            ['label' => 'New Purchase', 'url' => ['/purchase/create']],
            ['label' => 'GR', 'url' => ['/movement/create', 'type' => 'receive']],
            ['label' => 'GI', 'url' => ['/movement/create', 'type' => 'issue']],
        ]]
    ];

    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Новости', 'url' => ['/post/index']],
            ['label' => 'Афиша', 'url' => ['/poster/index']],
            ['label' => 'Админка Менеджера',
                'url' => ['/admin/default/index'],
                'items' => [
                    ['label' => 'Новости', 'url' => ['/admin/post/index']],
                    ['label' => 'Спец темы', 'url' => ['/admin/spectopic/index']],
                    ['label' => 'Фотоконкурсы', 'url' => ['/admin/photocontest/index']],
                    ['label' => 'Вакансии', 'url' => ['/admin/vacancy/index']],
                    ['label' => 'Предприятия', 'url' => ['/admin/enterprise/index']],
                    ['label' => 'События (Афиша)', 'url' => ['/admin/poster/index']],
                    ['label' => 'Рубрики афиши', 'url' => ['/admin/pcategory/index']],
                    ['label' => 'Статичные страницы', 'url' => ['/admin/static-page/index']],
                    ['label' => 'Пользователи (RBAC)', 'url' => ['/admin/user/index']],
                    ['label' => 'Опросы', 'url' => ['/admin/poll/index']],
                ],
            ],
            ['label' => 'Админка Предпринимателя', 'url' => ['/enterprise/enterprise']],
            ['label' => 'Регистрация', 'url' => ['/site/signup']],

//            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
            ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            ),
        ]
//        'items' => Helper::filter($menuItems),
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?php
        //        echo Menu::widget([
        //            'items' => [
        //                ['label' => 'Новости', 'url' => ['/admin/post/index']],
        //                ['label' => 'Опросы', 'url' => ['/admin/polls/index']],
        //                ['label' => 'Фотоконкурсы', 'url' => ['/admin/photocontest/index']],
        //                ['label' => 'Вакансии', 'url' => ['/admin/vacancy/index']],
        //                ['label' => 'Пользователи', 'url' => ['/admin/default/index']],
        //                ['label' => 'Предприятия', 'url' => ['/admin/enterprise/index']],
        //                ['label' => 'События', 'url' => ['/admin/poster/index']],
        //                ['label' => 'RBAC', 'url' => ['/rbac/default']],
        //            ],
        //            'activeCssClass'=>'active',
        //            'options' => [
        //                'id'=>'addMenu',
        //            ]
        //        ]);
        //        ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

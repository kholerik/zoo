<h1>ew</h1>
<?php
//Yii::$app->response->cookies->add(new \yii\web\Cookie([
//    'name' => 'gdfgfd1',
//    'value' => '2',
//    'domain' => 'yii2',
//]));
//setcookie('545', '11111цww11'); // идёт в header и записывается в куки РЕСТ клиент
//setcookie('_csrf1', Yii::$app->request->getCsrfToken()); // идёт в header и записывается в куки РЕСТ клиент
//$_COOKIE['_csrf2'] = Yii::$app->request->getCsrfToken(); // а эта устанавливает, но не записывает в РЕСТ клиент
print_r( Yii::$app->response->cookies ); // вобще ничего не показывает

//print_r( Yii::$app->response->getCookies() ); die(); // а так показвает только куку ЙЦУКЕ
//print_r( Yii::$app->request->getCsrfToken() ); die(); // меняется при каждом обновлении

//print_r( Yii::$app->request ); die();
//print_r( Yii::$app->request ); die(); // а так показвает только куку ЙЦУКЕ
use pollext\poll\Poll;
//
//print_r($images); die();
?>
<?php foreach ($model as $item) : ?>
<!--    --><?php //$image = $item->getImage();
////    print_r($image)?>
<!---->
<!---->
<!--    <div class="well">-->
<!--        <h3> --><?//= $item->title ?><!--</h3>-->
<!--        --><?// if ($image)
//            echo '<img src="' . $image->getUrl('300x300') . '"></img>';
//        ?>
<!--        <p>--><?//= $item->description ?><!--</p>-->
<!--<!--        -->--><?php
//        if ($polls[$item->id] != '') {
//            echo Poll::widget([
//                'pollName' => $polls[$item->id],
//                'answerOptions' =>
//                    [
//                        'Yes',
//                        'No',
//                    ],
//            ]);
//        }
////        ?>
<!--    </div>-->


<?php endforeach; ?>







<!---->
<?php $i = 0; ?>
<?php foreach ($model as $item) : ?>



    <div class="well">
        <h3> <?= $item->title ?></h3>
        <?
            echo '<img src=' . $item->miniature_url . '></img>';

        echo Poll::widget([
            'pollName'=>'Do you like PHP?',
            'answerOptions'=>
                [
                    'Yes',
                    'No',
                ],
            'params'=>
                [
                    'maxLineWidth'=> 200, // in pixels
                    'backgroundLinesColor'=>'#DCDCDC', //html hex
                    'linesHeight'=>20, // in pixels
                    'linesColor'=>'#DC0079' // html hex

                ]
        ]);

        ?>
        <p><?= $item->description ?></p>
    </div>

    <?php $i++; ?>
<?php endforeach; ?>

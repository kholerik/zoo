<h1>ew</h1>
<?php
use pollext\poll\Poll;
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

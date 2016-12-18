<?php
/**
 * Created by PhpStorm.
 * User: Eldo
 * Date: 20.10.2016
 * Time: 21:52
 */

namespace app\components;

use Exception;
use Yii;
use yii\base\Component;
use yii\imagine\Image;

class MyClass extends Component
{

//    public function watermark($nameImage, $postDir) { // веосия где надо передавать 2 параметра
//
//        $watermarkPath = Yii::getAlias('@webroot/uploads/watermark.jpg');
//        $pathImage = $postDir . $nameImage;
//        $newPathWatermark = $postDir . 'watermark/'. $nameImage;
//
//        // выясняем центр
//        $imagesize = getimagesize( $pathImage );
//        $wImage = $imagesize[0];
//        $hImage = $imagesize[1];
//        $watermark =  getimagesize($watermarkPath);
//        $wWater = $watermark[0];
//        $hWater = $watermark[1];
//        $x = $wImage/2 - $wWater/2;
//        $y = $hImage/2 - $hWater/2;
//        // выясняем центр
//        if($x + $wWater > $wImage OR $y + $hWater > $hImage) {
//            throw new Exception("Слишком маленькое изображение $x + $wWater > $wImage OR $y + $hWater > $hImage");
//        } else {
//            Image::watermark( $pathImage, $watermarkPath, [$x, $y] )
//                ->save($newPathWatermark, ['quality' => 100]);
//        }
//
//
//
//
//         // Меняет во всей папке
////        $watermarkPath = Yii::getAlias('@webroot/uploads/watermark.jpg');
////        $images = scandir($postDir);
////        foreach ($images as $image) {
////            $newPath = $postDir . $image;
////            $newPathWatermark = $postDir . 'watermark' . $image;
////            if(is_dir($newPath)) {
////                continue; // прерывает интерацию - костыль (массив содержит также . и ..)
////            }
////            // выясняем центр
////            $imagesize = getimagesize( $newPath );
////            $wImage = $imagesize[0];
////            $hImage = $imagesize[1];
////            $watermark =  getimagesize($watermarkPath);
////            $wWater = $watermark[0];
////            $hWater = $watermark[1];
////            $x = $wImage/2 - $wWater/2;
////            $y = $hImage/2 - $hWater/2;
////            // выясняем центр
////            Image::watermark( $newPath, $watermarkPath, [$x, $y] )
////                ->save($newPathWatermark, ['quality' => 100]);
//            // Меняет во всей папке
//
//
//
//    }  // веосия где надо передавать 2 параметра





    public function watermark($nameImage, $postDir) { // веосия где надо передавать 2 параметра
//        print_r(1111); die();
        $watermarkPath = Yii::getAlias('@webroot/uploads/watermark.jpg');
        $pathImage = $postDir . $nameImage;
        $newPathWatermark = $postDir . 'watermark/'. $nameImage;

        // выясняем центр
        $imagesize = getimagesize( $pathImage );
        $wImage = $imagesize[0];
        $hImage = $imagesize[1];
        $watermark =  getimagesize($watermarkPath);
        $wWater = $watermark[0];
        $hWater = $watermark[1];
        $x = $wImage/2 - $wWater/2;
        $y = $hImage/2 - $hWater/2;
        // выясняем центр
        if($x + $wWater > $wImage OR $y + $hWater > $hImage) {
            throw new Exception("Слишком маленькое изображение $x + $wWater > $wImage OR $y + $hWater > $hImage");
        } else {
            Image::watermark( $pathImage, $watermarkPath, [$x, $y] )
                ->save($newPathWatermark, ['quality' => 100]);
        }
        

    }  // веосия где надо передавать 2 параметра





//    public function imgUploadUpdate($model) {
//        if ($model->miniature_url == '') throw new Exception('miniature_url - пуст');
//
//        $postDir = Yii::getAlias('@webroot/uploads/post/'); // путь до папки с изображениями этого поста
//        $nameImage = explode('/', $model->miniature_url);
//        $nameImage = array_pop($nameImage);
//
//        $this->watermark($nameImage, $postDir);
//
//        // подменяю url в изображениях на папку с Вотермарком или без
//        $decription = $model->description;
//        $miniature_url = $model->miniature_url;
//        if ($model->waterMark_check == 1) {
//            $model->description = preg_replace('/uploads\/post\/([a-z0-9]+\.)/i', 'uploads/post/watermark/$1', $decription);
//            $model->miniature_url = preg_replace('/uploads\/post\/([a-z0-9]+\.)/i', 'uploads/post/watermark/$1', $miniature_url);
//        } else {
//            $model->description = preg_replace('/uploads\/post\/watermark\/([a-z0-9]+\.)/i', 'uploads/post/$1', $decription);
//            $model->miniature_url = preg_replace('/uploads\/post\/watermark\/([a-z0-9]+\.)/i', 'uploads/post/$1'    , $miniature_url);
//        }
//        // подменяю url в изображениях на папку с Вотермарком или без
//
//        return $model;
////        $model->save();
//
//    }



    public function imgUploadUpdate($content, $waterMarkCheck) { // находит и заменяет все ссылки, где в пути есть uploads/post/
        if ($content == '') throw new Exception('$content - пуст');
//        $postDir = Yii::getAlias('@webroot/uploads/post/'); // путь до папки с изображениями этого поста
//        $nameImage = explode('/', $url);
//        $nameImage = array_pop($nameImage);
//        $this->watermark($nameImage, $postDir);
        if ($waterMarkCheck) {
            $newContent = preg_replace('/uploads\/post\/([a-z0-9]+\.)/i', 'uploads/post/watermark/$1', $content);
        } else {
            $newContent = preg_replace('/uploads\/post\/watermark\/([a-z0-9]+\.)/i', 'uploads/post/$1', $content);
        }

//        print_r($newContent); die();
        // подменяю url в изображениях на папку с Вотермарком или без
        return $newContent;
    }







}
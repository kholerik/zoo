<?php

namespace app\components;

use zxbodya\yii2\galleryManager\GalleryBehavior;
use app\models\PcGallery;
use Yii;
use yii\helpers\BaseUrl;


class myGalleryBehavior extends GalleryBehavior {

    public $myTableName;

    private function getGalleryUrl($id) {
        $result = [];
        // получаем пути
        $url = 'uploads/gallery/' . $id;
        $url0 = BaseUrl::home(true). $url;
        $url1 = Yii::getAlias('@webroot/'). $url;
        if (is_dir($url1)) { // если есть такая папка
            $url2 = scandir($url1); //Array ( [0] => . [1] => .. [2] => 40 [3] => 45 [4] => 51 [5] => 52 )
            foreach ($url2 as $img) {
                if (is_dir($img)) continue; //( [0] => . [1] => ..
                $result[] = "$url0/$img/small.jpg";
            }
        }
        return $result;
        // получаем пути
    }


    public function afterUpdate()
    {

        parent::afterUpdate();


//        $galleries = PcGalleryMn::find()->where( ['photocontest_id' => $this->owner->id] )->joinWith('gallery')->all();
        $galleries = PcGallery::find()->where( ['photocontest_id' => $this->owner->id] )->all();
//        print_r($galleries); die();
        foreach ($galleries as $gallery) {
//            $gallery->gallery->delete(); // удаляем там
            $gallery->delete(); // удаляем сям
        }


        $urls = $this->getGalleryUrl($this->owner->id); // ссылки на фото, которые есть папке для данного поста

        foreach ( $urls as $photo_url) {
//            $asa = PcGallery::find()->where(['photo_url' => $photo_url ])->all();
//            if ( !isset($asa[0]) ) { // если поле существует - не записываем
            $gallery = new PcGallery();
//                $galleryMn = new PcGalleryMn();
            $gallery->photo_url = $photo_url;
            $gallery->photocontest_id = $this->owner->id;
            $gallery->save();  // a new row is inserted into user table
//                $galleryMn->photocontest_id = $this->owner->id;
//                $galleryMn->gallery_id   = $gallery->id;
//                $galleryMn->save();  // a new row is inserted into user table
//            }
        }




        $galleryId = $this->getGalleryId();
        if ($this->_galleryId != $galleryId) {
            $dirPath1 = $this->directory . '/' . $this->_galleryId;
            $dirPath2 = $this->directory . '/' . $galleryId;
            rename($dirPath1, $dirPath2);
        }




    }

}
<?php

namespace app\models;

use yii\helpers\FileHelper;
use yii\imagine\Image;
use yii\helpers\Json;
use Imagine\Image\Box;
use Imagine\Image\Point;

use yii\db\ActiveRecord;

class Img extends ActiveRecord
{

    public $image;
    public $crop_info;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [
                'image',
                'image',
                'extensions' => ['jpg', 'jpeg', 'png', 'gif'],
                'mimeTypes' => ['image/jpeg', 'image/pjpeg', 'image/png', 'image/gif'],
            ],
            ['crop_info', 'safe'],
        ];
    }

    public function afterSave($insert, $changedAttributes)
    {

        // open image
        $image = Image::getImagine()->open($this->image->tempName);

        // rendering information about crop of ONE option
        $cropInfo = Json::decode($this->crop_info)[0];
        $cropInfo['dWidth'] = (int)$cropInfo['dWidth']; //new width image
        $cropInfo['dHeight'] = (int)$cropInfo['dHeight']; //new height image
//        $cropInfo['x'] = $cropInfo['x']; //begin position of frame crop by X
//        $cropInfo['y'] = $cropInfo['y']; //begin position of frame crop by Y
        // Properties bolow we don't use in this example
        //$cropInfo['ratio'] = $cropInfo['ratio'] == 0 ? 1.0 : (float)$cropInfo['ratio']; //ratio image.
        //$cropInfo['width'] = (int)$cropInfo['width']; //width of cropped image
        //$cropInfo['height'] = (int)$cropInfo['height']; //height of cropped image
        //$cropInfo['sWidth'] = (int)$cropInfo['sWidth']; //width of source image
        //$cropInfo['sHeight'] = (int)$cropInfo['sHeight']; //height of source image

        //delete old images
        $oldImages = FileHelper::findFiles(Yii::getAlias('@path/to/save/image'), [
            'only' => [
                $this->id . '.*',
                'thumb_' . $this->id . '.*',
            ],
        ]);
        for ($i = 0; $i != count($oldImages); $i++) {
            @unlink($oldImages[$i]);
        }

        //saving thumbnail
        $newSizeThumb = new Box($cropInfo['dWidth'], $cropInfo['dHeight']);
        $cropSizeThumb = new Box(200, 200); //frame size of crop
        $cropPointThumb = new Point($cropInfo['x'], $cropInfo['y']);
        $pathThumbImage = Yii::getAlias('@path/to/save/image')
            . '/thumb_'
            . $this->id
            . '.'
            . $this->image->getExtension();

        $image->resize($newSizeThumb)
            ->crop($cropPointThumb, $cropSizeThumb)
            ->save($pathThumbImage, ['quality' => 100]);

        //saving original
        $this->image->saveAs(
            Yii::getAlias('@path/to/save/image')
            . '/'
            . $this->id
            . '.'
            . $this->image->getExtension()
        );
    }



}

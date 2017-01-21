<?php

namespace app\components;
//namespace vova07\imperavi\actions;

use vova07\imperavi\actions\UploadAction;
use yii\base\DynamicModel;
use yii\web\BadRequestHttpException;
use yii\web\Response;
use yii\web\UploadedFile;
use Yii;
use app\models\Post;
use vova07\imperavi\Widget;
use yii\base\Action;
use yii\base\InvalidCallException;
use yii\base\InvalidConfigException;
use yii\helpers\FileHelper;
use app\components;

class vova07UploadAction extends UploadAction
{

    private $_validator = 'image';



    public function run()
    {
        if (Yii::$app->request->isPost) {
            $file = UploadedFile::getInstanceByName($this->uploadParam);
            $model = new DynamicModel(compact('file'));
            $model->addRule('file', $this->_validator, $this->validatorOptions)->validate();
//            print_r($model->id); die();
//            $this->path .= $model->id;  // добавили айдиху в конце

            if ($model->hasErrors()) {
                $result = [
                    'error' => $model->getFirstError('file')
                ];
            } else {
                if ($this->unique === true && $model->file->extension) {
                    $model->file->name = uniqid() . '.' . $model->file->extension;
                }
                if ($model->file->saveAs($this->path . $model->file->name)) {
                    $result = ['filelink' => $this->url . $model->file->name];






                    // вставка
                    $myclass = new components\MyClass();
                    $myclass->watermark($model->file->name, $this->path);
                    // вставка






                    if ($this->uploadOnlyImage !== true) {
                        $result['filename'] = $model->file->name;
                    }
                } else {
                    $result = [
                        'error' => Yii::t('vova07/imperavi', 'ERROR_CAN_NOT_UPLOAD_FILE')
                    ];
                }
            }
            Yii::$app->response->format = Response::FORMAT_JSON;

            return $result;
        } else {
            throw new BadRequestHttpException('Only POST is allowed');
        }
    }


}

<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Image;
use yii\web\UploadedFile;

class ImageController extends Controller
{
    public function actionUpload()
    {
        $model = new Image();

        if (Yii::$app->request->isPost&&$model->load(Yii::$app->request->post())) {
             $model->link = UploadedFile::getInstance($model, 'link');
            if ($model->upload()) {
                // file is uploaded successfully
                //$model->save();
                $model->save();
                return;
            }
        }

        return $this->render('upload', ['model' => $model]);
    }
}
?>
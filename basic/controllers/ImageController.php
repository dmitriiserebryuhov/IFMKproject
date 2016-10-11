<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Images;
use yii\web\UploadedFile;
use yii\data\Pagination;
class ImageController extends Controller
{
     public function actionIndex()
    {
        $query = Images::find();

        $pagination = new Pagination([
            'defaultPageSize' => 2,
            'totalCount' => $query->count(),
        ]);

        $images = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'images' => $images,
            'pagination' => $pagination,
        ]);
    }


    public function actionCreate()
    {
        $model = new Images();

        if (Yii::$app->request->isPost&&$model->load(Yii::$app->request->post())) {
             $model->link = UploadedFile::getInstance($model, 'link');
            if ($model->upload()) {
                // file is uploaded successfully
                //$model->save();
                $model->save();
                return $this->redirect(['index']);
            }
        }

        return $this->render('upload', ['model' => $model]);
    }
}
?>
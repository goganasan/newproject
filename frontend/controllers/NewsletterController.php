<?php
/**
 * Created by PhpStorm.
 * User: Goganasan
 * Date: 11.03.2018
 * Time: 12:51
 */

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Subscribe;
use Yii;


class NewsletterController extends Controller
{
    public function actionSubscribe()
    {
        $formData = Yii::$app->request->post();
        $model = new Subscribe();

        if (Yii::$app->request->isPost) {

            $model->email = $formData['email'];

            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', 'Your describe was successful');
            }


//            $error = $model->getErrors();
//            echo '<pre>';
//            print_r($error);
//            echo '<pre>';die;

        }


        return $this->render('subscribe', [
            'model' => $model,
        ]);
    }

}
<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Test;
use Yii;

class TestController extends Controller
{
    public function actionIndex()
    {
        $maxNews = Yii::$app->params['maxNewsInList'];
        $list = Test::getNewsList($maxNews);

        return $this->render('index', [
            'list' => $list,
            ]);
    }
}
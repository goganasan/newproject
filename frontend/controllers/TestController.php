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

    public function actionView($id)
    {
        $item = Test::getItem($id);

        return $this->render('view', [
            'item' => $item,
        ]);
    }

    public function actionMail()
    {
        $result = Yii::$app->mailer->compose()
            ->setFrom('goganasan@gmail.com')
            ->setTo('goganasan@gmail.com')
            ->setSubject('Тема сообщения')
            ->setTextBody('Текст сообщения')
            ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
            ->send();

        var_dump($result);die;

    }
}
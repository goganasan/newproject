<?php

namespace console\controllers;

use Yii;
/**
 * Class MailerController
 * @package console\controllers
 */
class MailerController extends \yii\console\Controller
{
    public function actionSend()
    {
        $result = Yii::$app->mailer->compose()
            ->setFrom('goganasan@gmail.com')
            ->setTo('goganasan@gmail.com')
            ->setSubject('Тема сообщения')
            ->setTextBody('Текст сообщения')
            ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
            ->send();

        var_dump($result); die;
    }
}

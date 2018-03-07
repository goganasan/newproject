<?php

namespace console\controllers;

use yii\helpers\console;
use console\models\News;
use console\models\Subscriber;
use console\models\Sender;
/**
 * Class MailerController
 * @package console\controllers
 */
class MailerController extends \yii\console\Controller
{
    /**
     * sending newsletters
     */
    public function actionSend()
    {
        $newslist = News::getList();

        $subscribers = Subscriber::getSubscribers();

        $count = Sender::run($subscribers, $newslist);

        Console::output("\nEmail send count: {$count}");

    }
}

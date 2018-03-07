<?php

namespace console\models;

use Yii;

class Sender
{
    public static function run($subscribers, $newslist)
    {
        if (!empty($subscribers) && is_array($subscribers) && !empty($newslist) && is_array($newslist)) {
            foreach ($subscribers as $subscriber) {
                $result = Yii::$app->mailer->compose('/mailer/newslist', [
                    'newslist' => $newslist,
                ])
                    ->setFrom('goganasan@gmail.com')
                    ->setTo($subscriber['email'])
                    ->setSubject('Тема сообщения')
                    ->send();
            }

            return count($subscribers);
        }
    }
}
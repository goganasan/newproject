<?php
/**
 * Created by PhpStorm.
 * User: Goganasan
 * Date: 07.03.2018
 * Time: 23:56
 */

namespace console\models;

use Yii;


class Subscriber
{
    public static function getSubscribers()
    {
        $sql = 'SELECT * FROM subscriber';
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

}
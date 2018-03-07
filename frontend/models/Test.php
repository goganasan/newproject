<?php

namespace frontend\models;

use yii\base\Model;
use Yii;

class Test extends Model
{
    public static function getNewsList($max)
    {
        $max = intval($max);
        $sql = "SELECT * FROM news LIMIT $max";

        $result = Yii::$app->db->createCommand($sql)->queryAll();

        if (!empty($result) && is_array($result)) {
            foreach ($result as &$item) {
                $item['content'] = Yii::$app->stringHelper->getShortWords($item['content']);
            }
        }

        return $result;
    }

    public static function getItem($id)
    {
        $id = intval($id);
        $sql = "SELECT * FROM news WHERE id = " . $id ;

        $result = Yii::$app->db->createCommand($sql)->queryOne();

        return $result;
    }

}
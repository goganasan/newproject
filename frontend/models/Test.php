<?php

namespace frontend\models;

use yii\base\Model;
use Yii;
use frontend\components\StringHelper;

class Test extends Model
{
    public static function getNewsList($max)
    {
        $max = intval($max);
        $sql = "SELECT * FROM news LIMIT $max";

        $result = Yii::$app->db->createCommand($sql)->queryAll();

        $helper = new StringHelper();

        if (!empty($result) && is_array($result)) {
            foreach ($result as &$item) {
                $item['content'] = $helper->getShort($item['content']);
            }
        }

        return $result;
    }

}
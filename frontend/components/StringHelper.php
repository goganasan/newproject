<?php

namespace frontend\components;

use Yii;


class StringHelper
{
    private $limit;

    public function __construct()
    {
        $this->limit = Yii::$app->params['shortTextLimit'];
    }

    /**
     * @param $string
     * @param null $limit
     * @return bool|string
     */
    public function getShort($string, $limit = null)
    {
        if ($limit === null) {
            $limit = $this->limit;
        }
        return substr($string, 0, $limit);
    }

    public function getShortWords($string, $limit = null)
    {
        if ($limit === null) {
            $limit = $this->limit;
        }

        $symbols = substr($string, 0, $limit);
        $subCount = substr_count($symbols, ' ') + 1;
        $stringToArray = explode(" ", $string);
        array_splice($stringToArray, $subCount);

        return implode(" ", $stringToArray);
    }

}
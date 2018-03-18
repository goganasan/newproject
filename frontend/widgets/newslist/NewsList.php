<?php
/**
 * Created by PhpStorm.
 * User: Goganasan
 * Date: 16.03.2018
 * Time: 11:04
 */

namespace frontend\widgets\newslist;

use yii\base\Widget;
use frontend\models\Test;
use Yii;

class NewsList extends Widget
{
    public $showLimit = null;

    public function run()
    {
        $maxNews = Yii::$app->params['maxNewsInList'];

        if ($this->showLimit) {
            $maxNews = $this->showLimit;
        }

        $list = Test::getNewsList($maxNews);

        return $this->render('block',[
            'list' => $list,
        ]);
    }

}
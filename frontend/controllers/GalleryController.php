<?php
/**
 * Created by PhpStorm.
 * User: Goganasan
 * Date: 13.03.2018
 * Time: 16:16
 */

namespace frontend\controllers;

use Yii;
use frontend\models\Gallery;
use yii\web\Controller;

class GalleryController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
<?php
/* @var $model frontend\models\Subscribe */

use yii\helpers\Html;

//if (Yii::$app->session->hasFlash('success')) {
//    echo Yii::$app->session->getFlash('success');
//}

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '<pre>';
}
$arr = [
    '1' => 'Kiev',
    '2' => 'Sevastopol',
    '3' => 'Harkov',
    '4' => 'London',
];

echo Html::dropDownList('city', [], $arr);
$this->title = 'подписка на новости';
$this->params['breadcrumbs'] = [
    ['label' => 'Na suchka', 'url' => '/site/index'],
    ['label' => 'Na pidr', 'url' => '/site/about'],
];
?>
<form method="post">
    <p>Email:</p>
    <input type="text" name="email"/>
    <br><br>
    <input type="submit" value="Submit"/>
</form>
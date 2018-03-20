<?php
/* @var $model frontend\models\Employee */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '</pre>';
}
?>

    <h1>Welcome to our company</h1>

<?php $form = ActiveForm::begin(); ?>

<?php echo $form->field($model, 'first_name'); ?>

<?php echo $form->field($model, 'second_name'); ?>

<?php echo $form->field($model, 'middle_name'); ?>

<?php echo $form->field($model, 'email'); ?>

<?php echo $form->field($model, 'birth_date'); ?>

<?php echo $form->field($model, 'start_work_day'); ?>

<?php echo $form->field($model, 'position'); ?>

<?php echo $form->field($model, 'id_code'); ?>

<?php echo $form->field($model, 'city')->dropDownList($model->getCitiesList());
?>

<?php echo Html::submitButton('Send', ['class' => 'btn btn-primary']); ?>

<?php ActiveForm::end(); ?>


<?php


?>
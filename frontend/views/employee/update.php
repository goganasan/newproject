<?php
/* @var $model frontend\models\Employee */

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '</pre>';
}
?>
<h1>Update your information</h1>

<form method="post">

    <p>first name</p>
    <input name="first_name" type="text" />
    <br><br>

    <p>second name</p>
    <input name="second_name" type="text" />
    <br><br>

    <p>middle name</p>
    <input name="middle_name" type="text" />
    <br><br>

    <input type="submit" />

</form>

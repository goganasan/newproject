<?php
/**
 * Created by PhpStorm.
 * User: Goganasan
 * Date: 10.03.2018
 * Time: 21:20
 */

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Employee;
use Yii;
use frontend\models\example\Animal;
use frontend\models\example\Human;


class EmployeeController extends Controller
{
    public function actionIndex()
    {
        $employee1 = new Employee();
        $employee1->first_name = 'Alex';
        $employee1->second_name = 'Voronov';
        $employee1->middle_name = 'Sergeev';
        $employee1->salary = 1100;

        echo '<hr>';

        foreach ($employee1 as $attribute => $value) {
            echo "$attribute: $value <br>";
        }

        $array = $employee1->toArray();
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }

    public function actionTest()
    {
        $human1 = new Human;
        $animal1 = new Animal;
        echo '<br>';
        $human1->walk();
        echo '<br>';
        $animal1->walk();
    }

    public function actionRegister()
    {
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_REGISTER;

        $formData = Yii::$app->request->post();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', 'Your register was success');
            }
        }

        return $this->render('register', [
            'model' => $model,
        ]);
    }

    public function actionUpdate()
    {
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_UPDATE;

        $formData = Yii::$app->request->post();

        if (Yii::$app->request->isPost) {
            $model->attributes = $formData;

            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', 'Your update was success');
            }
        }
        return $this->render('update', [
            'model' => $model,
        ]);    }

}
<?php
/**
 * Created by PhpStorm.
 * User: Goganasan
 * Date: 10.03.2018
 * Time: 21:20
 */

namespace frontend\models;

use yii\base\Model;
use Yii;

class Employee extends Model
{
    const SCENARIO_EMPLOYEE_REGISTER = 'employee_register';
    const SCENARIO_EMPLOYEE_UPDATE = 'employee_update';

    public $first_name;
    public $second_name;
    public $middle_name;
    public $birth_date;
    public $start_work_day;
    public $exp;
    public $city;
    public $position;
    public $dept_number;
    public $id_code;
    public $email;
    public $salary;

    public function scenarios()
    {
        return [
            self::SCENARIO_EMPLOYEE_REGISTER => ['first_name', 'second_name', 'middle_name', 'email', 'birth_date', 'start_work_day', 'position', 'id_code'],
            self::SCENARIO_EMPLOYEE_UPDATE => ['first_name', 'second_name', 'middle_name'],
        ];
    }

    public function rules()
    {
        return [
            [['first_name', 'second_name', 'email'], 'required'],
            [['first_name', 'position'], 'string', 'min' => 2],
            [['second_name'], 'string', 'min' => 3],
            [['email'], 'email'],
            [['middle_name'], 'required', 'on' => self::SCENARIO_EMPLOYEE_UPDATE],
            [['birth_date', 'start_work_day'], 'date', 'format' => 'php:Y-m-d'],
            [['city'], 'integer'],
            [['id_code'], 'string', 'length' => 10],
            [['start_work_day', 'id_code', 'position'], 'required', 'on' => self::SCENARIO_EMPLOYEE_REGISTER],
        ];
    }

    public function save()
    {
        return 'true';
    }

    public function getCitiesList()
    {
        $sql = 'SELECT * FROM employee';
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

}
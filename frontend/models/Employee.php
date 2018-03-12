<?php
/**
 * Created by PhpStorm.
 * User: Goganasan
 * Date: 10.03.2018
 * Time: 21:20
 */

namespace frontend\models;

use yii\base\Model;

class Employee extends Model
{
    const SCENARIO_EMPLOYEE_REGISTER = 'employee_register';
    const SCENARIO_EMPLOYEE_UPDATE = 'employee_update';

    public $first_name;
    public $second_name;
    public $middle_name;
    public $email;
    public $salary;

    public function scenarios()
    {
        return [
            self::SCENARIO_EMPLOYEE_REGISTER => ['first_name', 'second_name', 'middle_name', 'email'],
            self::SCENARIO_EMPLOYEE_UPDATE => ['first_name', 'second_name', 'middle_name'],
        ];
    }

    public function rules()
    {
        return [
            [['first_name', 'second_name', 'email'], 'required'],
            [['first_name'], 'string', 'min' => 2],
            [['second_name'], 'string', 'min' => 3],
            [['email'], 'email'],
            [['middle_name'], 'required', 'on' => self::SCENARIO_EMPLOYEE_UPDATE],
        ];
    }

    public function save()
    {
        return 'true';
    }

}
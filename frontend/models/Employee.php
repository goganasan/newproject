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
    public $first_name;
    public $second_name;
    public $middle_name;
    public $email;
    public $salary;

}
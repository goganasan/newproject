<?php
/**
 * Created by PhpStorm.
 * User: Goganasan
 * Date: 22.03.2018
 * Time: 22:47
 */

namespace frontend\models\forms;

use yii\base\Model;
use frontend\models\User;
use Yii;

class LoginForm extends Model
{

    public $username;
    public $password;

    public function rules()
    {
        return [
            [['username'], 'trim'],
            [['username'], 'required'],

            [['password'], 'required'],
            [['password'], 'validatePassword'],
        ];
    }

    public function login()
    {
        if ($this->validate()) {

        }
    }

    /**
     * @param $attribute
     * @param $params
     */
    public function validatePassword($attribute, $params)
    {
        $user = User::findByUsername($this->username);

        if (!Yii::$app->security->validatePassword($this->password, $user->password_hash)) {
            $this->addError($attribute, 'incorrect password');
        }
    }

}
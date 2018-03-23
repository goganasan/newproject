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

class SignupForm extends Model
{

    public $username;
    public $email;
    public $password;

    public function rules()
    {
        return [
            [['username'], 'trim'],
            [['username'], 'required'],
            [['username'], 'string', 'min' => 2, 'max' => 255],
            [['username'], 'unique', 'targetClass' => User::class],


            [['email'], 'trim'],
            [['email'], 'required'],
            [['email'], 'email'],
            [['email'], 'string', 'max' => 255],
            [['email'], 'unique', 'targetClass' => User::class],

            //[['password'], 'trim'],
            [['password'], 'required'],
            [['password'], 'string', 'min' => 6],

        ];
    }

    public function save()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->created_at = $time = time();
            $user->updated_at = $time;
            $user->auth_key = Yii::$app->security->generateRandomString();
            $user->password_hash = Yii::$app->security->generatePasswordHash($this->password);

            return $user->save();
        }

        return false;
    }
}
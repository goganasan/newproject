<?php
/**
 * Created by PhpStorm.
 * User: Goganasan
 * Date: 20.03.2018
 * Time: 15:20
 */

namespace frontend\models;

use yii\db\ActiveRecord;
use Yii;
//use frontend\models\Publisher;

class Book extends ActiveRecord
{
    public static function tableName()
    {
        return '{{book}}';
    }

    public function rules()
    {
        return [
            [['name', 'publisher_id'], 'required'],
            [['date_published'], 'date', 'format' => 'php:Y-m-d'],
            [['isbn', 'publisher_id'], 'integer'],
        ];
    }

    public function getDataPublished()
    {
        return ($this->date_published) ? Yii::$app->formatter->asDate($this->date_published) : "Not set";
    }

    public function getPublisher()
    {
        return $this->hasOne(Publisher::class, ['id' => 'publisher_id'])->one();
    }

    public function getPublisherName()
    {
        if ($publisher = $this->getPublisher()) {
            return $publisher->name;
        }
        return 'Not set';
    }
}
<?php

use yii\db\Migration;

/**
 * Class m180318_162234_addCity
 */
class m180318_162234_addCity extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180318_162234_addCity cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180318_162234_addCity cannot be reverted.\n";

        return false;
    }
    */
}

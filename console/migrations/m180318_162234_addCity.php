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
        $this->addColumn('employee', 'city', $this->integer()->after('birth_date'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('employee', 'city');
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

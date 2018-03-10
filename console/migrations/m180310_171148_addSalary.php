<?php

use yii\db\Migration;

/**
 * Class m180310_171148_addSalary
 */
class m180310_171148_addSalary extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('employee', 'salary', $this->integer()->after('position'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('employee', 'salary');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180310_171148_addSalary cannot be reverted.\n";

        return false;
    }
    */
}

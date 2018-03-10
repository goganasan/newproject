<?php

use yii\db\Migration;

/**
 * Class m180310_175632_dropCity
 */
class m180310_175632_dropCity extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('employee', 'city');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('employee', 'city', $this->integer()->after('birth_date'));
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180310_175632_dropCity cannot be reverted.\n";

        return false;
    }
    */
}

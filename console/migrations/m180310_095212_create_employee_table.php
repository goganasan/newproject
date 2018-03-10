<?php

use yii\db\Migration;

/**
 * Handles the creation of table `employee`.
 */
class m180310_095212_create_employee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('employee', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string()->notNull(),
            'second_name' => $this->string(),
            'middle_name' => $this->string(),
            'birth_date' => $this->date(),
            'city' => $this->string(),
            'start_work_day' => $this->date()->notNull(),
            'exp' => $this->integer(3),
            'position' => $this->string()->notNull(),
            'dept_number' => $this->integer(3)->notNull(),
            'id_code' => $this->integer(),
            'email' => $this->string(255)->notNull()->unique(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('employee');
    }
}

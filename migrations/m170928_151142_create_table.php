<?php

use yii\db\Migration;

class m170928_151142_create_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('Contacts', [
            'id' => $this->primaryKey(),
            'Name' => $this->string()->notNull(),
            'update_at' => $this->timestamp()->notNull(),
			'created_at' => $this->dateTime() . ' DEFAULT NOW()',
			'NoN' => $this->integer(),
        ]);

		
    
    }

    public function safeDown()
    {
        $this->dropTable('Contacts');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170928_151142_create_table cannot be reverted.\n";

        return false;
    }
    */
}

<?php

use yii\db\Migration;

class m170928_153939_create_telefon extends Migration
{
    public function safeUp()
    {
	    $this->createTable('Phone', [
        'id' => $this->primaryKey(),
        'No' => $this->integer()->notNull(),
		'contact_id' => $this->integer()->notNull(),
		'created_at' => $this->dateTime() . ' DEFAULT NOW()',
		'Type' => $this->string(),
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
	C:/xampp/htdocs/y2/basic/yii
    }

    public function down()
    {
        echo "m170928_153939_create_telefon cannot be reverted.\n";

        return false;
    }
    */
}

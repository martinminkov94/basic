<?php

use yii\db\Migration;

class m170929_090101_populate_telefon extends Migration
{
    public function safeUp()
    {
		 $this->insert('Phone',array(
         'No' => '0888123123',
		 'contact_id' => '1',
		 'Type'=> 'personal',
		)); 
		$this->insert('Phone',array(
         'No' => '0888123456',
		 'contact_id' => '1',
		 'Type'=> 'personal',
		)); 
		$this->insert('Phone',array(
         'No' => '0888456123',
		 'contact_id' => '2',
		 'Type'=> 'service',
		)); 
		$this->insert('Phone',array(
         'No' => '0888456456',
		 'contact_id' => '2',
		 'Type'=> 'personal',
		)); 
		$this->insert('Phone',array(
         'No' => '0888654321',
		 'contact_id' => '3',
		 'Type'=> 'service',
		)); 
    }

    public function safeDown()
    {
        echo "m170929_090101_populate_telefon cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170929_090101_populate_telefon cannot be reverted.\n";

        return false;
    }
    */
}

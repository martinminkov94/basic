<?php

use yii\db\Migration;

class m170929_090040_populate_contacts extends Migration
{
    public function safeUp()
    {
		 $this->insert('Contacts',array(
         'Name' => 'ivan ivan',
		 'NoN'=> '2',
		)); 
		 $this->insert('Contacts',array(
         'Name' => 'ivan georgi',
		 'NoN'=> '2',
		)); 
		 $this->insert('Contacts',array(
         'Name' => 'georgi ivan',
		 'NoN'=> '1',
		 ));
		 $this->insert('Contacts',array(
         'Name' => 'georgi georgi',
		 'NoN'=> '0',
		)); 
    }

    public function safeDown()
    {
        echo "m170929_090040_populate_contacts cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170929_090040_populate_contacts cannot be reverted.\n";

        return false;
    }
    */
}

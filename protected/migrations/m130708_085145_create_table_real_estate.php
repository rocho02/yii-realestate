<?php

class m130708_085145_create_table_real_estate extends CDbMigration
{
// 	public function up()
// 	{
// 	}

// 	public function down()
// 	{
// 		echo "m130708_085145_create_table_real_estate does not support migration down.\n";
// 		return false;
// 	}

	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{

		$this->createTable('real_estate', array(
				'id_real_estate' => 'pk',
				'id_city' => 'int NOT NULL',
				'creation_date' => 'datetime DEFAULT NULL',
				'description' => 'string NOT NULL',
				'adress' => 'string NOT NULL',
				'type' => 'int NOT NULL',
				'status' => 'int NOT NULL',
				'state' => 'int NOT NULL',
		), 'ENGINE=InnoDB DEFAULT charset=utf8');
		
		
		$this->addForeignKey("fk_real_estate_city", "real_estate",	"id_city", "city", "id_city", "NO_ACTION", "NO_ACTION");
		
	}

	public function safeDown()
	{
		$this->dropTable('real_estate');
	}
}
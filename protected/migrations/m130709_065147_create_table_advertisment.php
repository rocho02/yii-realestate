<?php

class m130709_065147_create_table_advertisment extends CDbMigration
{

	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable('advertisment', array(
				'id_advertisment' => 'pk',
				'id_user' => 'int NOT NULL',
				'id_real_estate' => 'int NOT NULL',
				'create_time' => 'datetime NOT NULL',
				'update_time' => 'datetime NOT NULL',
				'validity_time' => 'datetime NOT NULL',
				'verified' => 'int NOT NULL',
				'flags' => 'int NOT NULL',
				'type' => 'int NOT NULL',//normal
				'title' => 'string not null default \'\'',//short title
				'teaser' => 'string not null default \'\'',//short teaser
				'text' => 'text not null default \'\'',//full text 
		), 'ENGINE=InnoDB DEFAULT charset=utf8');
		
		
		
		$this->addForeignKey("fk_advertisment_owner", "advertisment",	"id_user", "user", "id", "RESTRICT", "RESTRICT");
		$this->addForeignKey("fk_advertisment_realestate", "advertisment",	"id_real_estate", "real_estate", "id_real_estate", "CASCADE", "CASCADE");
		
		
	}

	public function safeDown(){
		$this->truncateTable("advertisment");
		$this->dropTable('advertisment');
	}
	
}
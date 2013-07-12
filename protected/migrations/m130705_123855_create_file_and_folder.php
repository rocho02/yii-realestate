<?php

class m130705_123855_create_file_and_folder extends CDbMigration
{
	public function safeUp()
	{
		
		//create the user table
		$this->createTable('folder', array(
				'id_folder' => 'pk',
				'create_date' => 'datetime DEFAULT NULL',
				'name' => 'string NOT NULL',
				'id_owner' => 'int NOT NULL',
				'type' => 'int NOT NULL',
				'flags' => 'int NOT NULL',
				'path' => 'string NOT NULL'
		), 'ENGINE=InnoDB DEFAULT CHARSET=utf8');
		
		$this->createTable('file', array(
				'id_file' => 'pk',
				'create_date' => 'datetime DEFAULT NULL',
				'name' => 'string NOT NULL',
				'id_folder' => 'int NOT NULL',
				'flags' => 'int NOT NULL',
				'original_name' => 'string DEFAULT \'\'',
		), 'ENGINE=InnoDB DEFAULT charset=utf8');
		
		$this->addForeignKey("fk_file_folder", "file", "id_folder", "folder", "id_folder", "CASCADE", "CASCADE");
	}

	public function safeDown(){
		$this->truncateTable("file");
		$this->dropTable("file");
		$this->dropTable("folder");
	}

	 
}
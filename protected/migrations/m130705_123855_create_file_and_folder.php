<?php

class m130705_123855_create_file_and_folder extends CDbMigration
{
	public function up()
	{
// 		CREATE TABLE `file` (
// 				`id_file` int(11) NOT NULL AUTO_INCREMENT,
// 				`creation_date` datetime NOT NULL,
// 				`name` varchar(100) DEFAULT NULL,
// 				`id_folder` int(11) NOT NULL,
// 				`flags` int(11) DEFAULT '0',
// 				`original_name` varchar(100) NOT NULL DEFAULT '',
// 				PRIMARY KEY (`id_file`),
// 				KEY `fk_folder` (`id_folder`),
// 				CONSTRAINT `file_ibfk_1` FOREIGN KEY (`id_folder`) REFERENCES `folder` (`id_fo
// 						lder`)
// 		) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8
		
		
		//create the user table
		$this->createTable('file', array(
				'id_file' => 'pk',
				'name' => 'string NOT NULL',
				'id_folder' => 'string NOT NULL',
				'flags' => 'string NOT NULL',
				'original_name' => 'datetime DEFAULT NULL',
				'create_time' => 'datetime DEFAULT NULL',
				'creation_date' => 'datetime NOT NUL',
		), 'ENGINE=InnoDB');
	}

	public function down()
	{
		echo "m130705_123855_create_file_and_folder does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}
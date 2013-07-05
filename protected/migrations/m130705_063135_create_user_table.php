<?php

class m130705_063135_create_user_table extends CDbMigration
{
	public function safeUp()	{
		
		//create the user table
		$this->createTable('user', array(
				'id' => 'pk',
				'username' => 'string NOT NULL',
				'email' => 'string NOT NULL',
				'password' => 'string NOT NULL',
				'last_login_time' => 'datetime DEFAULT NULL',
				'create_time' => 'datetime DEFAULT NULL',
				'create_user_id' => 'int(11) DEFAULT NULL',
				'update_time' => 'datetime DEFAULT NULL',
				'update_user_id' => 'int(11) DEFAULT NULL',
		), 'ENGINE=InnoDB');
		
	}

	public function safeDown()
	{
		$this->dropTable('user');
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
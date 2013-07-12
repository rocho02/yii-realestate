<?php

class m130705_063135_create_user_table extends CDbMigration
{
	public function safeUp()	{
		$user_table = "user";
		//create the user table
		$this->createTable($user_table, array(
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

		
		$this->insert( $user_table, array(
				'username' => 'admin',
				'email' => 'rocho02@gmail.com',
				'password' => '21232f297a57a5a743894a0e4a801fc3',//== admin
				'last_login_time' => null,
				'create_time' => 'now()',
				'create_user_id' => '1',
				'update_time' => 'now()',
				'update_user_id' => '1',
		) );
		
		$this->insert( $user_table, array(
				'username' => 'member',
				'email' => 'member@rocho-net.hu',
				'password' => 'aa08769cdcb26674c6706093503ff0a3',//== member
				'last_login_time' => null,
				'create_time' => 'now()',
				'create_user_id' => '1',
				'update_time' => 'now()',
				'update_user_id' => '1',
		) );
		
		
		$this->insert( $user_table, array(
				'username' => 'reader',
				'email' => 'reader@rocho-net.hu',
				'password' => '1de9b0a30075ae8c303eb420c103c320',//== reader
				'last_login_time' => null,
				'create_time' => 'now()',
				'create_user_id' => '1',
				'update_time' => 'now()',
				'update_user_id' => '1',
		) );
		
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
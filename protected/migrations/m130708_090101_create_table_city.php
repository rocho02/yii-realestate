<?php

class m130708_090101_create_table_city extends CDbMigration
{

	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{

		$this->createTable('city', array(
				'id_city' => 'pk',
				'name' => 'string NOT NULL',
				'zip' => 'string NOT NULL',
		), 'ENGINE=InnoDB DEFAULT charset=utf8');
		
		$this->insert( 'city', array(
				'name' => 'Winterfell',
				'zip' => '10000',
		) );
		
		$this->insert( 'city', array(
				'name' => 'King\'s Landing',
				'zip' => '10001',
		) );
		
		$this->insert( 'city', array(
				'name' => 'Oldtown',
				'zip' => '10002',
		) );
		
		$this->insert( 'city', array(
				'name' => 'Braavos',
				'zip' => '10003',
		) );
		
		$this->insert( 'city', array(
				'name' => 'Harrenhal',
				'zip' => '10004',
		) );
	}

	public function safeDown(){
		$this->dropTable('city');
	}
}
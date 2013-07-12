<?php

class m130708_101921_create_rbac_tables extends CDbMigration
{

	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		//create the auth item table
		$this->createTable('auth_item', array(
				'name' =>'varchar(64) NOT NULL',
				'type' =>'integer NOT NULL',
				'description' =>'text',
				'bizrule' =>'text',
				'data' =>'text',
				'PRIMARY KEY (`name`)',
		), 'ENGINE=InnoDB DEFAULT charset=utf8');



		//create the auth item child table
		$this->createTable('auth_item_child', array(
				'parent' =>'varchar(64) NOT NULL',
				'child' =>'varchar(64) NOT NULL',
				'PRIMARY KEY (`parent`,`child`)',
		), 'ENGINE=InnoDB DEFAULT charset=utf8');

		//the auth_item_child.parent is a reference to auth_item.name
		$this->addForeignKey("fk_auth_item_child_parent", "auth_item_child", "parent", "auth_item", "name", "CASCADE", "CASCADE");

		//the auth_item_child.child is a reference to auth_item.name
		$this->addForeignKey("fk_auth_item_child_child", "auth_item_child", "child", "auth_item", "name", "CASCADE", "CASCADE");

		//create the auth assignment table
		$this->createTable('auth_assignment', array(
				'itemname' =>'varchar(64) NOT NULL',
				'userid' =>'int(11) NOT NULL',
				'bizrule' =>'text',
				'data' =>'text',
				'PRIMARY KEY (`itemname`,`userid`)',
		), 'ENGINE=InnoDB DEFAULT charset=utf8');


		//the auth_assignment.itemname is a reference
		//to auth_item.name
		$this->addForeignKey("fk_auth_assignment_itemname",	"auth_assignment","itemname","auth_item","name","CASCADE",	"CASCADE");
		//the auth_assignment.userid is a reference
		//to user.id
		$this->addForeignKey("fk_auth_assignment_userid","auth_assignment","userid","user","id","CASCADE","CASCADE"	);
	}

	public function safeDown()
	{
		$this->truncateTable('auth_assignment');
		$this->truncateTable('auth_item_child');
		$this->truncateTable('auth_item');
		$this->dropTable('auth_assignment');
		$this->dropTable('auth_item_child');
		$this->dropTable('auth_item');
	}
}
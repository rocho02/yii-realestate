<?php

class m130719_120606_real_estate_properties extends CDbMigration
{
// 	public function up()
// 	{
// 	}

// 	public function down()
// 	{
// 		echo "m130719_120606_real_estate_properties does not support migration down.\n";
// 		return false;
// 	}

	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable('real_estate_properties', array(
				'id_real_estate_properties' => 'pk',
				'id_real_estate' => 'int NOT NULL',
				'price_buy' => 'int',
				'price_rent' => 'int',
				'area_size' => 'float',
				'ground_size' => 'float',
				'number_of_rooms' => 'int',
				'number_of_half_rooms' => 'int',
				'build_date' => 'date',
				'heating_type' => 'int',
				'garage_car_1' => 'bool',
				'garage_car_2' => 'bool',
				'parking_garden' => 'bool',
				'parking_public' => 'bool',
				'parking_near' => 'bool',
				'outlook_panorama' => 'bool',
				'outlook_street' => 'bool',
				'outlook_garden' => 'bool',
				'outlook_other' => 'bool',
		), 'ENGINE=InnoDB DEFAULT charset=utf8');
		
		$this->addForeignKey("fk_real_estate_properties_realestate", "real_estate_properties",	"id_real_estate", "real_estate", "id_real_estate", "CASCADE", "CASCADE");
		
	}

	public function safeDown()
	{
		$this->truncateTable("real_estate_properties");
		$this->dropTable('real_estate_properties');
	}
	
	
}
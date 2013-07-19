<?php

/**
 * This is the model class for table "real_estate_properties".
 *
 * The followings are the available columns in table 'real_estate_properties':
 * @property integer $id_real_estate_properties
 * @property integer $id_real_estate
 * @property integer $price_buy
 * @property integer $price_rent
 * @property double $area_size
 * @property double $ground_size
 * @property integer $number_of_rooms
 * @property integer $number_of_half_rooms
 * @property string $build_date
 * @property integer $heating_type
 * @property integer $garage_car_1
 * @property integer $garage_car_2
 * @property integer $parking_garden
 * @property integer $parking_public
 * @property integer $parking_near
 * @property integer $outlook_panorama
 * @property integer $outlook_street
 * @property integer $outlook_garden
 * @property integer $outlook_other
 *
 * The followings are the available model relations:
 * @property RealEstate $idRealEstate
 */
class RealEstateProperties extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RealEstateProperties the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'real_estate_properties';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_real_estate', 'required'),
			array('id_real_estate, price_buy, price_rent, number_of_rooms, number_of_half_rooms, heating_type, garage_car_1, garage_car_2, parking_garden, parking_public, parking_near, outlook_panorama, outlook_street, outlook_garden, outlook_other', 'numerical', 'integerOnly'=>true),
			array('area_size, ground_size', 'numerical'),
			array('build_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_real_estate_properties, id_real_estate, price_buy, price_rent, area_size, ground_size, number_of_rooms, number_of_half_rooms, build_date, heating_type, garage_car_1, garage_car_2, parking_garden, parking_public, parking_near, outlook_panorama, outlook_street, outlook_garden, outlook_other', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idRealEstate' => array(self::BELONGS_TO, 'RealEstate', 'id_real_estate'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_real_estate_properties' => 'Id Real Estate Properties',
			'id_real_estate' => 'Id Real Estate',
			'price_buy' => 'Price Buy',
			'price_rent' => 'Price Rent',
			'area_size' => 'Area Size',
			'ground_size' => 'Ground Size',
			'number_of_rooms' => 'Number Of Rooms',
			'number_of_half_rooms' => 'Number Of Half Rooms',
			'build_date' => 'Build Date',
			'heating_type' => 'Heating Type',
			'garage_car_1' => 'Garage Car 1',
			'garage_car_2' => 'Garage Car 2',
			'parking_garden' => 'Parking Garden',
			'parking_public' => 'Parking Public',
			'parking_near' => 'Parking Near',
			'outlook_panorama' => 'Outlook Panorama',
			'outlook_street' => 'Outlook Street',
			'outlook_garden' => 'Outlook Garden',
			'outlook_other' => 'Outlook Other',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_real_estate_properties',$this->id_real_estate_properties);
		$criteria->compare('id_real_estate',$this->id_real_estate);
		$criteria->compare('price_buy',$this->price_buy);
		$criteria->compare('price_rent',$this->price_rent);
		$criteria->compare('area_size',$this->area_size);
		$criteria->compare('ground_size',$this->ground_size);
		$criteria->compare('number_of_rooms',$this->number_of_rooms);
		$criteria->compare('number_of_half_rooms',$this->number_of_half_rooms);
		$criteria->compare('build_date',$this->build_date,true);
		$criteria->compare('heating_type',$this->heating_type);
		$criteria->compare('garage_car_1',$this->garage_car_1);
		$criteria->compare('garage_car_2',$this->garage_car_2);
		$criteria->compare('parking_garden',$this->parking_garden);
		$criteria->compare('parking_public',$this->parking_public);
		$criteria->compare('parking_near',$this->parking_near);
		$criteria->compare('outlook_panorama',$this->outlook_panorama);
		$criteria->compare('outlook_street',$this->outlook_street);
		$criteria->compare('outlook_garden',$this->outlook_garden);
		$criteria->compare('outlook_other',$this->outlook_other);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
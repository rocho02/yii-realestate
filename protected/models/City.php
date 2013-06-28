<?php

/**
 * This is the model class for table "city".
 *
 * The followings are the available columns in table 'city':
 * @property integer $id_city
 * @property string $name
 * @property string $zip
 */
class City extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return City the static model class
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
		return 'city';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('name', 'length', 'max'=>100),
			array('zip', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_city, name, zip', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_city' => 'Id City',
			'name' => 'Name',
			'zip' => 'Zip',
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

		$criteria->compare('id_city',$this->id_city);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('zip',$this->zip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
	
	public static function cityAutoComplete($name='') {
	
		// Recommended: Secure Way to Write SQL in Yii
		$sql= 'SELECT id_city as id  ,name AS label FROM city WHERE name LIKE :name';
		$name = $name.'%';
		return Yii::app()->db->createCommand($sql)->queryAll(true,array(':name'=>$name));
	
		// Not Recommended: Simple Way for those who can't understand the above way.
		// Uncomment the below and comment out above 3 lines
		/*
		 $sql= "SELECT id ,title AS label FROM users WHERE title LIKE '$name%'";
		return Yii::app()->db->createCommand($sql)->queryAll();
		*/
	
	}
	
}
<?php

/**
 * This is the model class for table "folder".
 *
 * The followings are the available columns in table 'folder':
 * @property integer $id_folder
 * @property string $creation_date
 * @property string $name
 * @property integer $id_owner
 * @property integer $type
 * @property integer $flags
 * @property string $path
 */
class Folder extends REActiveRecord
{
	
	const TYPE_REAL_ESTATE_IMAGES = 0;
	const PATH_REAL_ESTATE_IMAGES = 'upload/realestate/images';
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Folder the static model class
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
		return 'folder';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('creation_date,name', 'required'),
			array('id_owner, type, flags', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>100),
			array('path', 'length', 'max'=>1000),
			array('create_time', 'safe'),
			array('name', 'unique'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_folder, creation_date, name, id_owner, type, flags, path', 'safe', 'on'=>'search'),
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
			'id_folder' => 'Id Folder',
			'creation_date' => 'Creation Date',
			'name' => 'Name',
			'id_owner' => 'Id Owner',
			'type' => 'Type',
			'flags' => 'Flags',
			'path' => 'Path',
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

		$criteria->compare('id_folder',$this->id_folder);
		$criteria->compare('creation_date',$this->creation_date,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('id_owner',$this->id_owner);
		$criteria->compare('type',$this->type);
		$criteria->compare('flags',$this->flags);
		$criteria->compare('path',$this->path,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
	
}
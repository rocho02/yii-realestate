<?php

/**
 * This is the model class for table "file".
 *
 * The followings are the available columns in table 'file':
 * @property integer $id_file
 * @property string $creation_date
 * @property string $name
 * @property string $original_name
 * @property integer $id_folder
 * @property integer $flags
 *
 * The followings are the available model relations:
 * @property Folder $idFolder
 */
class File  extends REActiveRecord
{
	
	public $image;
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return File the static model class
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
		return 'file';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('creation_date, id_folder', 'required'),
			array('id_folder, flags', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>100),
			array('original_name', 'length', 'max'=>100),
			array('creation_date, id_folder,name, original_name', 'safe'),
			array('image', 'file', 'types'=>'jpg, gif, png', 'maxSize'=>(1024*1024*2) ),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_file, creation_date, name, original_name, id_folder, flags', 'safe', 'on'=>'search'),
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
			'idFolder' => array(self::BELONGS_TO, 'Folder', 'id_folder'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_file' => 'Id File',
			'creation_date' => 'Creation Date',
			'name' => 'Name',
			'original_name' => "Original Name",
			'id_folder' => 'Id Folder',
			'flags' => 'Flags',
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

		$criteria->compare('id_file',$this->id_file);
		$criteria->compare('creation_date',$this->creation_date,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('original_name',$this->original_name,true);
		$criteria->compare('id_folder',$this->id_folder);
		$criteria->compare('flags',$this->flags);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
<?php

/**
 * This is the model class for table "advertisment".
 *
 * The followings are the available columns in table 'advertisment':
 * @property integer $id_advertisment
 * @property integer $id_user
 * @property integer $id_real_estate
 * @property string $create_time
 * @property string $update_time
 * @property string $validity_time
 * @property integer $verified
 * @property integer $flags
 * @property integer $type
 * @property string $title
 * @property string $teaser
 * @property string $text
 *
 * The followings are the available model relations:
 * @property RealEstate $idRealEstate
 * @property User $idUser
 */
class Advertisment extends CActiveRecord
{
	
	const FLAG_SALE = 1;
	CONST FLAG_RENT = 2;
	
	CONST TYPE_NORMAL = 1;
	
	
	public $sale;
	public $rent;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Advertisment the static model class
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
		return 'advertisment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_user, id_real_estate, create_time, update_time, validity_time, validityTimeInput, verified, flags, type,title,teaser, text,sale,rent', 'required'),
			array('id_user, id_real_estate, verified, flags, type', 'numerical', 'integerOnly'=>true),
			array('title, teaser', 'length', 'max'=>255),
			array('id_user, id_real_estate,create_time,update_time, validity_time, verified,flags ', 'safe', 'on'=>'create' ),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_advertisment, id_user, id_real_estate, create_time, update_time, validity_time, verified, flags, type, title, teaser, text', 'safe', 'on'=>'search'),
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
			'idUser' => array(self::BELONGS_TO, 'User', 'id_user'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_advertisment' => 'Id Advertisment',
			'id_user' => 'Id User',
			'id_real_estate' => 'Id Real Estate',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
			'validity_time' => 'Validity Time',
			'verified' => 'Verified',
			'flags' => 'Flags',
			'type' => 'Type',
			'title' => 'Title',
			'teaser' => 'Teaser',
			'text' => 'Text',
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

		$criteria->compare('id_advertisment',$this->id_advertisment);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('id_real_estate',$this->id_real_estate);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('validity_time',$this->validity_time,true);
		$criteria->compare('verified',$this->verified);
		$criteria->compare('flags',$this->flags);
		$criteria->compare('type',$this->type);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('teaser',$this->teaser,true);
		$criteria->compare('text',$this->text,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	protected function beforeValidate()
	{
		if($this->isNewRecord)
		{
			// set the create date, last updated date and the user doing the creating
			$this->create_time=new CDbExpression('NOW()');
			$this->update_time=new CDbExpression('NOW()');
			//$this->create_user_id=$this->update_user_id=Yii::app()->user->id;
		}
		else
		{
			//not a new record, so just set the last updated time and last updated user id
			$this->update_time=new CDbExpression('NOW()');
			//$this->update_user_id=Yii::app()->user->id;
		}
		return parent::beforeValidate();
	}
	
	public function getValidityTimeInput()
	{
		return date('Y-m-d', CDateTimeParser::parse($this->validity_time, Yii::app()->locale->dateFormat));
	}
	
	public function setValidityTimeInput($value)
	{
		$this->validity_time = Yii::app()->dateFormatter->formatDateTime(CDateTimeParser::parse($value, 'yyyy-MM-dd'),'medium',null);
	}
	
}
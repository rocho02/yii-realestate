<?php

/**
 * This is the model class for table "real_estate".
 *
 * The followings are the available columns in table 'real_estate':
 * @property integer $id_real_estate
 * @property string $creation_date
 * @property string $description
 * @property string $adress
 * @property integer $type
 * @property integer $status
 * @property integer $state
 */
class RealEstate extends CActiveRecord
{
	
	const TYPE_HOUSE = 1;
	const TYPE_FLAT = 2;
	const TYPE_GROUND = 3;
	const TYPE_TERRACED_HOUSE = 4;
	const TYPE_SEMI_DITACHED_HOUSE = 5;
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RealEstate the static model class
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
		return 'real_estate';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('creation_date, type, status, state', 'required'),
			array('type, status, state', 'numerical', 'integerOnly'=>true),
			array('description, adress', 'length', 'max'=>500),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_real_estate, creation_date, description, adress, type, status, state', 'safe', 'on'=>'search'),
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
			'id_real_estate' => 'Id Real Estate',
			'creation_date' => 'Creation Date',
			'description' => 'Description',
			'adress' => 'Adress',
			'type' => 'Type',
			'status' => 'Status',
			'state' => 'State',
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

		$criteria->compare('id_real_estate',$this->id_real_estate);
		$criteria->compare('creation_date',$this->creation_date,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('adress',$this->adress,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('status',$this->status);
		$criteria->compare('state',$this->state);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
	public static function getTypes(){
		return array(
				self::TYPE_FLAT => Yii::t('app',"Lakás"),
				self::TYPE_HOUSE=> Yii::t('app',"Családi Ház"),
				self::TYPE_GROUND => Yii::t('app',"Telek"),
				self::TYPE_SEMI_DITACHED_HOUSE => Yii::t('app',"Ikerház"),
				self::TYPE_TERRACED_HOUSE => Yii::t('app',"Sorház"),
				);
	}
}
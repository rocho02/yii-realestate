
<?php 

class SimpleSearchForm extends CFormModel{

	public $id_city;
	public $city_autocomplete_value;
	public $city_autocomplete_label;
	public $type;
	public $price_from;
	public $price_to;
	
	
	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
// 		return parent::rules();
		return array(
				array('id_city, city_autocomplete_value ,type,price_from, price_to','default'),
				array('city_autocomplete_value','numerical'),
				array('city_autocomplete_value', 'cityAutocompleteValue'),
				array('price_from, price_to', 'numerical', 'integerOnly'=>true,)
				// username and password are required
		//		array('type,price_from,price_to', 'required'),
				// rememberMe needs to be a boolean
// 				array('rememberMe', 'boolean'),
				// password needs to be authenticated
// 				array('password', 'authenticate'),
		);
	}
	
	function attributeLabels(){
		
		return array(
				'type' => Yii::t('app','Típus'), 
				'price_from' => Yii::t('app','Ár'),
				'price_to' => Yii::t('app','Ig')
				);
	}
	
	function cityAutocompleteValue($attribute,$params){
		print "attribute is ".$this->$attribute;
		if ( !empty($this->$attribute)){
		$city = City::model()->findByPk( $this->$attribute );
		if (  $city == null ) 
			$this->addError($attribute, Yii::t('app','A település nem szerepel az adatbázisban'));
		}
	}
	
	
}


?>
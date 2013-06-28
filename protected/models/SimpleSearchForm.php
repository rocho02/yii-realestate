
<?php 

class SimpleSearchForm extends CFormModel{

	public $id_city;
	public $type;
	public $price_from;
	public $price_to;
	
	
	function attributeLabels(){
		
		return array(
				'type' => Yii::t('app','Típus'), 
				'price_from' => Yii::t('app','Ár'),
				'price_to' => Yii::t('app','Ig')
				);
		
		
	}
	
	
}


?>
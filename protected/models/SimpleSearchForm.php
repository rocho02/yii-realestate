
<?php 

class SimpleSearchForm extends CFormModel{

	public $id_city;
	public $type;
	
	
	
	function attributeLabels(){
		
		return array('type' => Yii::t('app','Típus') );
		
		
	}
	
	
}


?>
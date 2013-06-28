<?php


Yii::import('zii.widgets.jui.CJuiWidget');

class RnSlideShow extends CJuiWidget {
	
	
	public $styleId = 'rnslideshow';
	public $width = null;
	public $height = null;
	public $images = array();
	
	
	public function init() {
		parent::init();
	}
	
	public function makeImages() {
		$html = '<div id="' . $this->styleId . '">' . "\n";
		
		foreach ($this->images as $img) {

			$width = "";
			$height = "";
			if ( isset($this->width))
				$width = "width='".$this->width."'"; 
			
			if ( isset($this->height))
				$height = "height='".$this->height."'";
			
			
			$html .= '<img src="' . $img[0] . '" '. " $width  $height />" . "\n";
		}
		$html .= '</div>' . "\n";
		return $html;
	}
	
	
	/**
	 * Run the widget, including the js files.
	 */
	public function run() {
		$cs = Yii::app()->clientScript;
	
		$dir = dirname(__FILE__) . DIRECTORY_SEPARATOR;
		$baseUrl = Yii::app()->getAssetManager()->publish($dir . 'assets');
		$options = array();
		if (!empty($options)) {
			$options = CJavaScript::encode($options);
		}
	
		$clientScript = Yii::app()->getClientScript();
		$clientScript->registerCoreScript('jquery');
		$clientScript->registerScriptFile($baseUrl . '/jquery.cycle.all.js');
	
		$js = "jQuery('#{$this->styleId}').cycle($options);";
		$cs->registerScript('Yii.rnslideshow' . $this->styleId, $js);
		echo $this->makeImages();
	}
	
}
?>
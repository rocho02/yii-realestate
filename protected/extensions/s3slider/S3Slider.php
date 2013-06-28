<?php
/**
 * Description of S3Slider
 *
 * @author Ricardo Obregón <ricardo@obregon.co> <robregonm@gmail.com>
 * @uses Yii v.1.1.4
 */
Yii::import('zii.widgets.jui.CJuiWidget');

class S3Slider extends CJuiWidget {

    public $name = 's3slider';
    //public $theme = 'smoothness';
    public $timeout = '3000';
    public $images = array();
    public $width = '400';
    public $height = '300';
    public $opacity = '0.7';

    public function init() {
        parent::init();
    }

    public function makeImages() {
        $html = '<div id="' . $this->name . '">' . "\n";
        $html .= '<ul id="' . $this->name . 'Content">' . "\n";
        foreach ($this->images as $img) {
            $html .= '<li class="' . $this->name . 'Image">' . "\n";
            $html .= '<img src="' . $img[0] . '" />' . "\n";
            if (empty($img[2])) {
                $img[2] = 'top';
            }
            $html .= '<span class="' . $img[2] . '">' . $img[1] . '</span>' . "\n";

            $html .= '</li>' . "\n";
        }
        $html .= '<div class="clear ' . $this->name . 'Image"></div>' . "\n";
        $html .= '</ul>' . "\n";
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
        if (isset($this->fmAllow))
            $options['timeout'] = $this->timeout;
        if (!empty($options)) {
            $options = CJavaScript::encode($options);
        }

        $clientScript = Yii::app()->getClientScript();
        $cssparams = array(
            'name' => $this->name,
            'width' => $this->width,
            'height' => $this->height,
            'opacity' => $this->opacity,
        );
        $clientScript->registerCssFile($baseUrl . '/s3Slider.css.php?data=' . urlencode(base64_encode(serialize($cssparams)))); //http_build_query($cssparams)

        $clientScript->registerCoreScript('jquery');

        $clientScript->registerScriptFile($baseUrl . '/s3Slider.js');

        $js = "jQuery('#{$this->name}').s3Slider($options);";
        $cs->registerScript('Yii.S3Slider' . $this->name, $js);
        echo $this->makeImages();
    }

}
?>

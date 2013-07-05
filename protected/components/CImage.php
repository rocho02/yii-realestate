<?php

abstract class CAbstractImage extends CComponent{

	const ORIENTATION_LANDSCAPE = 1;
	const ORIENTATION_PORTRAIT  = 2;
	
	public $_file;
	
	function loadImage($file){
			$_file = $file;
	}

	function getDimensions(){
		list($width, $height) = getimagesize($this->_file);
		return array($width,$height);
	}


	function getWidth(){
		$dim = getDimensions();
		return $dim[0];
	}

	function getHeight(){
		$dim = getDimensions();
		return $dim[1];
	}

	function createThumbnail($file){
			
	}

	function getType(){
		
	}
	
	
	function getOrientation(){
		list($width, $height) = getimagesize($this->_file);
		
		if( $width > $height)
			$orientation = CAbstractImage::ORIENTATION_LANDSCAPE;
		else
			$orientation = CAbstractImage::ORIENTATION_PORTRAIT;
	}


}



?>
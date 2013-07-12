<?php


class BitUtils{
	
	
	
	public static function set($n,$flag,$on){
		
		if ( $on ){
			$r = $n | $flag;
			return $r;
		}
		else{
			$r = $n  & ~$flag;
			return $r;
		}
		
	}
	
	
	
	
	
}
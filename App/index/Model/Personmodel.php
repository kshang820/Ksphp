<?php
namespace App\index\Model;
class Personmodel 
{
	private $_name 	 = null;
	private $_age  	 = null;
	private $_gender = null;
	
	public function __get($key)
	{
		if(isset($this->$key))
			return $this->$key;
		else
			return null;
	}
	
	public function __set($key,$value)
	{
		$this->$key = $value;
	}	
	
}
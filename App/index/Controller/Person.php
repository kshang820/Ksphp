<?php
namespace App\index\Controller;
use App\index\Bll\Personbll;
use App\index\Model\Personmodel;
class Person 
{
	private $personbll = null;
	private $personmodel = null;
	
	public function __construct()
	{
		$this->personbll = new Personbll();
		$this->personmodel = new Personmodel();
	}
	
	public function add()
	{
		$this->personmodel->_name = 'king';
		$this->personmodel->_age = 18;
		$this->personmodel->_gender = 'man';
		//print_r($this->personmodel);
		return $this->personbll->add($this->personmodel);
	}	
}
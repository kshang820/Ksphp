<?php
namespace App\index\Bll;
use App\index\Dal\Persondal;
use App\index\Model\Personmodel;
class Personbll 
{
	private $persondal = null;
	
	public function __construct()
	{
		$this->persondal = new Persondal();
	}
	
	public function add(Personmodel $p)
	{
		return $this->persondal->add($p);
	}	
}
<?php
namespace App\index\Dal;
use App\index\Model\Personmodel;
use Kscore\Pdohelper;
class Persondal 
{
	private $db = null;
	public function __Construct()
	{
		if(!$this->db)
			$this->db = Pdohelper::getInstance();
	}
	public function add(Personmodel $person )
	{
		$data['_name'] = $person->_name;
		$data['_age'] = $person->_age;
		$data['_gender'] = $person->_gender;
		return $this->db->insert('kuser',$data);
	}	
}
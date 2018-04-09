<?php
namespace Kscore;
class Application 
{
	public function __construct()
	{
		define('MODULE',$_REQUEST['m']);
		define('CONTROLLER',$_REQUEST['c']);
		define('ACTION',$_REQUEST['a']);
	}
	public function start()
	{
		$controller = new \App\index\Controller\Person();
		//var_dump($controller);
		return $controller->add();
		//return MODULE.'-'.CONTROLLER.'-'.ACTION;
	}
}
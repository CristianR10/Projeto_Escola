<?php 

namespace src\System\Configs\Environments;
use src\System\Configs as Configs;

class EnvironmentsDevelopment extends Configs\AbstracEnvironment
{
	public $servers;

	public function __construct()
	{
		parent::__construct();
		$this->servers = array(
			'localhost',
			'127.0.0.1'
			);
	}
}
 ?>
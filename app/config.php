<?php 
	//Constantes
	$configs = new src\System\Configs\Config;

	$configs->env->add('development');
	$configs->env->development->baseURI = '/sistema/';
	$configs->env->development->database->setConnectionData(array(
		'host' => 'localhost',
		'user' => 'root',
		'password' => '',
		'dbname' => 'escola_projeto'

	));
 ?>
<?php

class ControladorRuta
{

	static public function ctrRuta()
	{

		$config = include(__DIR__ . '/../.env.php');
		return $config['APP_URL'];
	}
}

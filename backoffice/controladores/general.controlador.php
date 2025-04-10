<?php

class ControladorGeneral
{

	static private function getEnv($key)
	{
		$env = include(__DIR__ . '/../../.env.php');
		return $env[$key] ?? null;
	}

	static public function ctrRuta()
	{
		return self::getEnv('APP_URL');
	}

	static public function ctrValorSuscripcion()
	{
		return 10;
	}

	static public function ctrPatrocinador()
	{
		return "Portal";
	}
}

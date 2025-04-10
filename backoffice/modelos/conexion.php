<?php

class Conexion
{
	static private function getEnv($key)
	{
		$envPath = __DIR__ . '/../../.env.php';
		if (file_exists($envPath)) {
			$env = include($envPath);
			return $env[$key] ?? null;
		}
		return null;
	}

	static public function conectar()
	{
		try {
			$host = self::getEnv('DB_HOST');
			$dbname = self::getEnv('DB_NAME');
			$user = self::getEnv('DB_USER');
			$pass = self::getEnv('DB_PASS');

			$link = new PDO(
				"mysql:host=$host;dbname=$dbname",
				$user,
				$pass,
				array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
			);

			$link->exec("set names utf8");

			return $link;
		} catch (PDOException $e) {
			echo "Error de conexión: " . $e->getMessage();
			return null;
		}
	}
}

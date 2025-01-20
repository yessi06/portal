<?php

class Conexion
{

	static public function conectar()
	{
		try {
			$link = new PDO(
				"mysql:host=localhost;dbname=crm",
				"root",
				"12345",
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

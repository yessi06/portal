<?php

require_once "conexion.php";

class ModeloClientes
{

	/*=============================================
	Registro de Clientes
	=============================================*/

	/*=============================================
	Crear nuevo cliente
	=============================================*/
	static public function mdlCrearCliente($tabla, $datos)
	{
		try {
			$conn = Conexion::conectar();
			
			if (!$conn) {
				throw new Exception("Error de conexión a la base de datos");
			}

			$stmt = $conn->prepare("INSERT INTO $tabla (nombre, correo, celular, origen, estado, pais, codigo_pais, ciudad, direccion) 
								  VALUES (:nombre, :correo, :celular, :origen, :estado, :pais, :codigo_pais, :ciudad, :direccion)");

			$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
			$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
			$stmt->bindParam(":celular", $datos["celular"], PDO::PARAM_STR);
			$stmt->bindParam(":origen", $datos["origen"], PDO::PARAM_STR);
			$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
			$stmt->bindParam(":pais", $datos["pais"], PDO::PARAM_STR);
			$stmt->bindParam(":codigo_pais", $datos["codigo_pais"], PDO::PARAM_STR);
			$stmt->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);
			$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);

			if ($stmt->execute()) {
				return "ok";
			}
			
			throw new Exception("Error al ejecutar la consulta");

		} catch (Exception $e) {
			error_log("Error en mdlCrearCliente: " . $e->getMessage());
			return "error";
		} finally {
			if (isset($stmt)) {
				$stmt = null;
			}
		}
	}

	/*=============================================
	Mostrar clientes
	=============================================*/

	static public function mdlMostrarClientes($tabla, $item, $valor)
	{
		try {
			$conn = Conexion::conectar();
			
			if (!$conn) {
				throw new Exception("Error de conexión a la base de datos");
			}
			
			if ($item != null) {
				$stmt = $conn->prepare("SELECT * FROM $tabla WHERE $item = :valor");
				$stmt->bindParam(":valor", $valor, PDO::PARAM_STR);
				$stmt->execute();
				return $stmt->fetch(PDO::FETCH_ASSOC);
			} else {
				$stmt = $conn->prepare("SELECT * FROM $tabla ORDER BY id_cliente DESC");
				$stmt->execute();
				return $stmt->fetchAll(PDO::FETCH_ASSOC);
			}

		} catch (Exception $e) {
			error_log("Error en mdlMostrarClientes: " . $e->getMessage());
			return false;
		} finally {
			if (isset($stmt)) {
				$stmt = null;
			}
		}
	}

	/*=============================================
	Actualizar Clientes
	=============================================*/

	/* Mostrar detalle del cliente */
	static public function mdlMostrarCliente($tabla, $item, $valor)
	{
		try {
			$conn = Conexion::conectar();
			
			if (!$conn) {
				throw new Exception("Error de conexión a la base de datos");
			}

			if ($item != null) {
				$stmt = $conn->prepare("SELECT * FROM $tabla WHERE $item = :valor");
				$stmt->bindParam(":valor", $valor, PDO::PARAM_STR);
				$stmt->execute();
				return $stmt->fetch(PDO::FETCH_ASSOC);
			}
			return false;
		} catch (Exception $e) {
			error_log("Error en mdlMostrarCliente: " . $e->getMessage());
			return false;
		} finally {
			if (isset($stmt)) {
				$stmt = null;
			}
		}
	}
}

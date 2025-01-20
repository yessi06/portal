<?php

require_once "../controladores/clientes.controlador.php";
require_once "../modelos/clientes.modelo.php";

class TablaClientes
{

	public function mostrarTabla()
	{
		try {
			$clientes = ControladorClientes::ctrMostrarClientes(null, null);

			if ($clientes === false) {
				throw new Exception("Error al obtener los clientes de la base de datos");
			}

			$datosJson = array();

			if (empty($clientes)) {
				echo json_encode(array(
					"data" => array(),
					"error" => false,
					"mensaje" => "No hay clientes registrados"
				));
				return;
			}

			foreach ($clientes as $key => $value) {
				// Sanitizar datos
				$nombre = htmlspecialchars($value["nombre"], ENT_QUOTES, 'UTF-8');
				$correo = htmlspecialchars($value["correo"], ENT_QUOTES, 'UTF-8');
				$celular = htmlspecialchars($value["celular"], ENT_QUOTES, 'UTF-8');
				$origen = htmlspecialchars($value["origen"] ?? 'N/A', ENT_QUOTES, 'UTF-8');
				$fecha = $value["fecha"] ? date("d/m/Y H:i", strtotime($value["fecha"])) : 'N/A';
				$estado = htmlspecialchars($value["estado"] ?? 'N/A', ENT_QUOTES, 'UTF-8');
				$pais = htmlspecialchars($value["pais"] ?? 'N/A', ENT_QUOTES, 'UTF-8');
				$codigo_pais = htmlspecialchars($value["codigo_pais"] ?? 'N/A', ENT_QUOTES, 'UTF-8');
				$ciudad = htmlspecialchars($value["ciudad"] ?? 'N/A', ENT_QUOTES, 'UTF-8');
				$direccion = htmlspecialchars($value["direccion"] ?? 'N/A', ENT_QUOTES, 'UTF-8');

				// Botones de acción
				$botones = '<div class="btn-group">';
				$botones .= '<a href="detalle-cliente/' . $value["id_cliente"] . '" class="btn btn-info btn-sm">
								<i class="fas fa-eye"></i> Ver Detalle
							</a>';
				$botones .= '</div>';

				$datosJson[] = array(
					($key + 1),
					$nombre,
					$correo,
					$celular,
					$origen,
					$fecha,
					$estado,
					$pais,
					$codigo_pais,
					$ciudad,
					$direccion,
					$botones
				);
			}

			echo json_encode(array(
				"data" => $datosJson,
				"error" => false,
				"mensaje" => "Datos obtenidos correctamente"
			));
		} catch (Exception $e) {
			error_log("Error en TablaClientes::mostrarTabla: " . $e->getMessage());
			echo json_encode(array(
				"data" => array(),
				"error" => true,
				"mensaje" => "Error al procesar los datos: " . $e->getMessage()
			));
		}
	}
}

// Headers para evitar caché
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-Type: application/json');

$activarTabla = new TablaClientes();
$activarTabla->mostrarTabla();

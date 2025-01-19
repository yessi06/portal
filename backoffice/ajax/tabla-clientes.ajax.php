<?php

require_once "../controladores/clientes.controlador.php";
require_once "../modelos/clientes.modelo.php";

class TablaClientes
{

	public function mostrarTabla()
	{
		$item = null;
		$valor = null;
		$clientes = ControladorClientes::ctrMostrarClientes($item, $valor);

		if (count($clientes) == 0) {
			echo '{ "data":[]}';
			return;
		}


		$datosJson = '{"data":[';
		foreach ($clientes as $key => $value) {
			$datosJson .= '[

					   "' . $key . '",
				       "' . $value["nombre"] . '",
				       "' . $value["correo"] . '",
				       "' . $value["celular"] . '",
					],';
		}

		$datosJson = substr($datosJson, 0, -1);
		$datosJson .= ']}';
		echo $datosJson;
	}
}

$activarTabla = new TablaClientes();
$activarTabla->mostrarTabla();

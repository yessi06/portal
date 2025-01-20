<?php

class ControladorClientes
{

	/*=============================================
	Crear Cliente
	=============================================*/

	static public function ctrCrearCliente()
	{
		if(isset($_POST["nombre"])) {
			
			if(preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nombre"]) &&
			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["correo"]) &&
			   preg_match('/^[()\-0-9 ]+$/', $_POST["celular"])) {

				$tabla = "clientes";
				
				$datos = array(
					"nombre" => $_POST["nombre"],
					"correo" => $_POST["correo"],
					"celular" => $_POST["celular"]
				);

				$respuesta = ModeloClientes::mdlCrearCliente($tabla, $datos);

				if($respuesta == "ok") {
					echo '<script>
						Swal.fire({
							icon: "success",
							title: "¡Cliente agregado correctamente!",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"
						}).then((result) => {
							if(result.value) {
								window.location = "clientes";
							}
						});
					</script>';
				} else {
					echo '<script>
						Swal.fire({
							icon: "error",
							title: "Error",
							text: "Hubo un error al crear el cliente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"
						});
					</script>';
				}
			} else {
				echo '<script>
					Swal.fire({
						icon: "error",
						title: "Error",
						text: "Los campos no pueden ir vacíos o llevar caracteres especiales",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"
					});
				</script>';
			}
		}
	}

	/*=============================================
	Mostrar Clientes
	=============================================*/

	static public function ctrMostrarClientes($item, $valor)
	{
		$tabla = "clientes";
		$respuesta = ModeloClientes::mdlMostrarClientes($tabla, $item, $valor);
		return $respuesta;
	}

	/*=============================================
	Mostrar Cliente Individual
	=============================================*/

	static public function ctrMostrarCliente($item, $valor)
	{
		$tabla = "clientes";
		$respuesta = ModeloClientes::mdlMostrarCliente($tabla, $item, $valor);
		return $respuesta;
	}
}

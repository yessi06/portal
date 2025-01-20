<?php

require_once "../controladores/clientes.controlador.php";
require_once "../modelos/clientes.modelo.php";

class AjaxClientes {

    /*=============================================
    Crear Cliente
    =============================================*/
    public function ajaxCrearCliente() {
        $respuesta = ControladorClientes::ctrCrearCliente();
        echo $respuesta;
    }
}

/*=============================================
CREAR CLIENTE
=============================================*/
if(isset($_POST["nombre"])) {
    $crearCliente = new AjaxClientes();
    $crearCliente->ajaxCrearCliente();
} 
<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require_once "controladores/plantilla.controlador.php";
require_once "controladores/ruta.controlador.php";

require_once "backoffice/controladores/usuarios.controlador.php";
require_once "backoffice/modelos/usuarios.modelo.php";

require_once "backoffice/controladores/clientes.controlador.php";
require_once "backoffice/modelos/clientes.modelo.php";

// https://github.com/PHPMailer/PHPMailer
require_once "backoffice/extensiones/vendor/autoload.php";

$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();

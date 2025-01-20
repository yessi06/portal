<?php
if(!isset($_GET["id"])) {
    echo '<script>window.location = "clientes";</script>';
    return;
}

$cliente = ControladorClientes::ctrMostrarCliente("id_cliente", $_GET["id"]);

if(!$cliente) {
    echo '<script>
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Cliente no encontrado",
            showConfirmButton: true,
            confirmButtonText: "Cerrar"
        }).then((result) => {
            if(result.value) {
                window.location = "clientes";
            }
        });
    </script>';
    return;
}
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detalle del Cliente</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="clientes">Clientes</a></li>
                        <li class="breadcrumb-item active">Detalle del Cliente</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Información del Cliente</h3>
                <div class="card-tools">
                    <a href="clientes" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Volver
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nombre:</label>
                            <p class="form-control-static"><?php echo $cliente["nombre"]; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <p class="form-control-static"><?php echo $cliente["correo"]; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Teléfono:</label>
                            <p class="form-control-static"><?php echo $cliente["celular"]; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Origen:</label>
                            <p class="form-control-static"><?php echo $cliente["origen"] ?? 'N/A'; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Fecha de Registro:</label>
                            <p class="form-control-static">
                                <?php echo $cliente["fecha"] ? date("d/m/Y H:i", strtotime($cliente["fecha"])) : 'N/A'; ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Estado:</label>
                            <p class="form-control-static"><?php echo $cliente["estado"] ?? 'N/A'; ?></p>
                        </div>
                        <div class="form-group">
                            <label>País:</label>
                            <p class="form-control-static"><?php echo $cliente["pais"] ?? 'N/A'; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Código País:</label>
                            <p class="form-control-static"><?php echo $cliente["codigo_pais"] ?? 'N/A'; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Ciudad:</label>
                            <p class="form-control-static"><?php echo $cliente["ciudad"] ?? 'N/A'; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Dirección:</label>
                            <p class="form-control-static"><?php echo $cliente["direccion"] ?? 'N/A'; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- SweetAlert2 -->
<script src="vistas/plugins/sweetalert2/sweetalert2.all.min.js"></script> 
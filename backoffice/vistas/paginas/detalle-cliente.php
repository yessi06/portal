<?php
if(isset($_GET["id"])){
    $item = "id";
    $valor = $_GET["id"];
    $cliente = ControladorClientes::ctrMostrarCliente($item, $valor);
}
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detalle del Cliente</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-body">
                <?php if(isset($cliente)): ?>
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Información Personal</h3>
                            <p><strong>Nombre:</strong> <?php echo $cliente["nombre"]; ?></p>
                            <p><strong>Email:</strong> <?php echo $cliente["email"]; ?></p>
                            <p><strong>Teléfono:</strong> <?php echo $cliente["telefono"]; ?></p>
                            <p><strong>Dirección:</strong> <?php echo $cliente["direccion"]; ?></p>
                        </div>
                        <div class="col-md-6">
                            <h3>Información Adicional</h3>
                            <p><strong>Fecha de Registro:</strong> <?php echo $cliente["fecha_registro"]; ?></p>
                            <p><strong>Última Actualización:</strong> <?php echo $cliente["ultima_actualizacion"]; ?></p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <a href="clientes" class="btn btn-secondary">Volver</a>
                            <a href="index.php?pagina=editar-cliente&id=<?php echo $cliente["id"]; ?>" class="btn btn-primary">Editar Cliente</a>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="alert alert-warning">
                        Cliente no encontrado
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div> 
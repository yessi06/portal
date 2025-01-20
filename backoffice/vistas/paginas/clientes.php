<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Clientes</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                        <li class="breadcrumb-item active">Clientes</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Listado de Clientes</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCliente">
                        <i class="fas fa-plus"></i> Nuevo Cliente
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered dt-responsive tablaClientes" width="100%">
                    <thead>
                        <tr>
                            <th style="width:10px">#</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Origen</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                            <th>País</th>
                            <th>Código País</th>
                            <th>Ciudad</th>
                            <th>Dirección</th>
                            <th width="100px">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
</div>

<!-- Modal Agregar Cliente -->
<div class="modal fade" id="modalAgregarCliente" tabindex="-1" role="dialog" aria-labelledby="modalAgregarCliente" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form method="post" id="formAgregarCliente">
                <div class="modal-header">
                    <h5 class="modal-title">Agregar Nuevo Cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" name="nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="correo">Email</label>
                                <input type="email" class="form-control" name="correo" required>
                            </div>
                            <div class="form-group">
                                <label for="celular">Teléfono</label>
                                <input type="text" class="form-control" name="celular" required>
                            </div>
                            <div class="form-group">
                                <label for="origen">Origen</label>
                                <input type="text" class="form-control" name="origen">
                            </div>
                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <input type="text" class="form-control" name="estado">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pais">País</label>
                                <input type="text" class="form-control" name="pais">
                            </div>
                            <div class="form-group">
                                <label for="codigo_pais">Código País</label>
                                <input type="text" class="form-control" name="codigo_pais">
                            </div>
                            <div class="form-group">
                                <label for="ciudad">Ciudad</label>
                                <input type="text" class="form-control" name="ciudad">
                            </div>
                            <div class="form-group">
                                <label for="direccion">Dirección</label>
                                <textarea class="form-control" name="direccion" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar Cliente</button>
                </div>

                <?php
                $crearCliente = new ControladorClientes();
                $crearCliente->ctrCrearCliente();
                ?>
            </form>
        </div>
    </div>
</div>

<!-- DataTables -->
<link rel="stylesheet" href="vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="vistas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

<!-- SweetAlert2 -->
<script src="vistas/plugins/sweetalert2/sweetalert2.all.min.js"></script>

<!-- DataTables JS -->
<script src="vistas/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="vistas/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- Clientes JS -->
<script src="vistas/js/clientes.js"></script>
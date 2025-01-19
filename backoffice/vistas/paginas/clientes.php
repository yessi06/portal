<div class="content-wrapper" style="min-height: 1058.31px;">
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
        <h3 class="card-title">Clientes registrados</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body">

        <table class="table table-striped table-bordered dt-responsive tablaClientes" width="100%">

          <thead>
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Email</th>
              <th>Celular</th>
            </tr>
          </thead>
          <tbody>

            <!--  <?php foreach ($clientes as $key => $value): ?>
             <tr>
              <td><?php echo ($key + 1); ?></td>
              <td><?php echo $value["nombre"] ?></td>
              <td><?php echo $value["correo"] ?></td>
              <td><?php echo $value["celular"] ?></td>
            </tr>
            <?php endforeach ?> -->

          </tbody>
        </table>
      </div>

      <div class="card-footer">
        Footer
      </div>
      <!-- /.card-footer-->
    </div>
  </section>
</div>

<script src="vistas/js/clientes.js"></script>
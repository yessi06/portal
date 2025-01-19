<!--=====================================
HEADER
======================================-->

<header style="height: 100vh; background-color: #f1f1f1;">

	<div class="container-fluid h-100">

		<div class="container p-0 h-100 d-flex flex-column justify-content-center">

			<div class="row justify-content-center text-center">

				<!-- LOGO -->

				<div class="col-12 my-3 logotipo">

					<a href="<?php echo $ruta; ?>inicio">
						<img data-nite-src="img/icono.png" class="img-fluid" style="width: 60%;">
					</a>

				</div>

				<!-- BOTONES DE INGRESO Y REGISTRO -->

				<div class="col-12 my-3 ingresos">

					<button class="btn btn-info btn-lg mx-2">
						<a href="<?php echo $ruta; ?>ingreso" class="text-white text-decoration-none">Ingresar</a>
					</button>

					<button class="btn btn-secondary btn-lg mx-2">
						<a href="<?php echo $ruta; ?>registro" class="text-white text-decoration-none">Crear Cuenta</a>
					</button>

				</div>

			</div>

		</div>

	</div>

</header>
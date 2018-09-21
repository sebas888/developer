<?php include('../templates/head.php'); ?>
<?php include('../templates/nav.php'); ?>


	<h3>Formulario de Registro</h3>
	<form action="registrar.php" method="post" class="form-register">
		<h2 class="form__titulo">Crea una Cuenta</h2>
		<div class="contenedor-inputs">
			<input type="text" name="nombre" placeholder="Nombre" class="input-48" required="">
			<input type="text" name="apellidos" placeholder="Apellidos" class="input-48" required="">
			<input type="email" name="correo" placeholder="Correo" class="input-100" required="">
			<input type="text" name="usuario" placeholder="Usuario" class="input-48" required="">
			<input type="password" name="clave" placeholder="Contraseña" class="input-48" required="">
			<input type="text" name="telefono" placeholder="Telefono" class="input-100" required="">
			<input type="submit" value="registrar" class="btn-enviar">
			<p class="form__link">¿Ya tienes una cuenta? <a href="#"> Ingresa aquí</a></p>
		</div> 
	</form>
<?php include('../templates/foot.php');?>
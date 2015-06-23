<?php include "php/cabecera.inc" ?>
<br>

<form action="php/logcliente.php" method="POST" role="form">
	<div class="form-group ">
		¿Ya eres usuario?<br><br>
		USUARIO.
		<input type="text" name="usuario" placeholder="Introduce tu nombre de usuario" class="form-control">
		CONTRASEÑA.
		<input type="password" name="contrasena" placeholder="Introduce tu contraseña" class="form-control">
		<a href="registro.php">¿Aun no eres cliente? Pulsa aquí para crear una nueva cuenta.</a><br>
		<input type="submit" class='btn btn-info'>
	</div>

</form>


<?php include "php/piedepagina.inc" ?>

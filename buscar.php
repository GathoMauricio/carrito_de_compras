<?php include "php/cabecera.inc" ?>
<?php include "php/config.inc" ?>
<?php
echo "<a href='tienda.php'><button class='btn btn-primary btn-sm' >
				<span class='glyphicon glyphicon-circle-arrow-left'></span>
				Mostrar todo</button></a> <br>";
$dato=strlen($_POST['buscar']);
if(isset($_POST['buscar']) and $dato>0){

$conexion = mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
mysqli_set_charset($conexion, "utf8");
$peticion = "SELECT * FROM productos WHERE existencias > 0 and nombre LIKE '%".$_POST['buscar']."%'";
$resultado = mysqli_query($conexion, $peticion);

while($fila = mysqli_fetch_array($resultado)) {
	
	echo "<article>";
	$peticion2 = "SELECT * FROM imagenesproductos WHERE idproducto = ".$fila['id']." LIMIT 1";
	$resultado2 = mysqli_query($conexion, $peticion2);
	while($fila2 = mysqli_fetch_array($resultado2)) {
		echo "<img src='photo/".$fila2['imagen']."' width=100px>";
	}
	
	echo "<a href='producto.php?id=".$fila['id']."'><h3>".$fila['nombre']."</h3></a>";
	echo "<p>".$fila['descripcion']."</p>";
	echo "<p>Precio: $".$fila['precio']."</p>";
	
	echo "<br>";
	echo "<a href='producto.php?id=".$fila['id']."'><button class='btn btn-primary btn-sm '>
	<span class='glyphicon glyphicon-info-sign'></span>
	 Más información</button></a>";
	echo "<button value='".$fila['id']."' class='botoncompra btn btn-success btn-sm'>
	<span class='glyphicon glyphicon-plus'></span>
	Comprar ahora</button>";
	
	echo "</article>";
	echo "<br>";
	mysqli_close($conexion);

}
}else{
	echo"<script>
	window.location = 'tienda.php';
</script>";
}
?>



<?php include "php/piedepagina.inc" ?>

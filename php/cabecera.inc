<?php
session_start();
if(!isset($_SESSION['contador'])){$_SESSION['contador'] = 0;}
?>
<!doctype html>
<html lang="es">
	<head>
		<title>Tienda</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="img/favicon.ico" rel="icon" type="image/x-icon" />
		<link rel=Stylesheet href="css/movil.css" media='screen and (min-width: 1px) and (max-width: 800px)'>
		<link rel=Stylesheet href="css/pcmac.css" media='screen and (min-width: 801px) and (max-width: 4000px)'>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-theme.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/codigo.js"></script>
        <script type="text/javascript" src="js/slide.js"></script>
		<script src="js/bootstrap.js"></script>
	</head>
	<body background="img/fondo.png">
		
		<!--Barra de Navegacion-->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="barra">
            <div class="navbar-header">
                	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Cambiar Navegacion</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
					</button>
                	<a href="#" class="navbar-brand">LOGO</a>
                	
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">
                    	<span class="glyphicon glyphicon-home"></span>
                    	Inicio</a></li>
                    <li><a href="registro.php">
                    	<span class="glyphicon glyphicon-book"></span>
                    	Registro</a></li>
                    <li><a href="tienda.php">
                    	<span class="glyphicon glyphicon-credit-card"></span>
                    	Tienda</a></li>
                    <li><a href="carrito.php">
                    	<span class="glyphicon glyphicon-shopping-cart"></span>
                    	Carrito</a></li>
                    <li><a href="acercade.php">
                    	<span class="glyphicon glyphicon-info-sign"></span>
                    	Acerca de</a></li>
                </ul>

                <div id="buscar">
                	<form class="navbar-form navbar-left" method="POST" action="buscar.php">
                    	<div class="form-group">
                        	<input type="text" class="form-control" name="buscar">
                   		</div>
                    		<button type="submit" class="btn btn-default">
                    			<span class="glyphicon glyphicon-search"></span>
                    			Buscar</button>
                	</form>
                </div>


            </div>
        </nav>


		<div id="contenedor">
			<header>
				<a href="tienda.php"><h1>Tienda</h1></a>
				<h2>Subtítulo de la tienda</h2>
			</header>
			<section>
			

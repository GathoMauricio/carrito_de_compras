<?php include "php/cabecera.inc" ?>
<?php include "php/config.inc" ?>


	<hr>		
	<center><h4>CARRITO DE COMPRAS</h4></center>
	<div id="contienecarrito" style="border-radius:10px;">
			<div id="carrito" style="background:rgb(200,200,255);color:black; border-radius:10px;">
			Carrito
			</div>
			
			<a href='php/destruir.php'><button class='btn btn-primary btn-sm'>
				<span class='glyphicon glyphicon-remove'></span>
				Vaciar carrito</button></a>
			<a href='confirmar.php'><button class='btn btn-success btn-sm'>
				<span class='glyphicon glyphicon-ok'></span>
				Confirmar compra</button></a>
			<a href='tienda.php'><button class='btn btn-primary btn-sm' >
				<span class='glyphicon glyphicon-circle-arrow-left'></span>
				Seguir comprando</button></a>
	</div>


</section>
	<hr>		
	
			<footer>
				<hr>
				<center><h6><span class='glyphicon glyphicon-copyright-mark'></span> Desarrollado por Stark Systems. 
					<img src='img/logo.png' width='40'/>
				</h6></center>
			</footer>
		</div>
	</body>
</html>

<?php include_once 'includes/templates/header.php'; ?>
	<section class="seccion contenedor">
		<h2>Resumen Registro</h2>
		<?php
			if(isset($_POST['submit'])){
				include_once 'includes/funciones/funciones.php';
				$nombre = $_POST['nombre'];
				$apellido = $_POST['apellido'];
				$email = $_POST['email'];
				$regalo = $_POST['regalo'];
				$total = $_POST['total_pedido'];
				$fecha =  date('Y-m-d H:m:s');
				//pedidos
				$boletos = $_POST['boletos'];
				$camisas = $_POST['pedido_camisas'];
				$etiquetas = $_POST['pedido_etiquetas'];	

				$pedidos = productos_json($boletos, $camisas, $etiquetas);
				var_dump($pedidos);
			
		?>
		<?php }?>
	</section>
<?php include_once 'includes/templates/footer.php'; ?>
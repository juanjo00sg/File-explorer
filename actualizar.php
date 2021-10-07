<!-- Se presenta un formulario para que el usuario actualice la información de la tabla en archivos.php-->
<?php include 'conexion.php';
$id = $_REQUEST['id'];
$resultado = $conexion->query("SELECT * FROM tbarchivos WHERE id ='$id' ");
if ($fila = $resultado->fetch_assoc()) {
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Sistema de Archivos en la Nube</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body>
	<div class="container">
		<h2>Insertar Archivo/Directorio</h2>
		<div class="row">
			<div class="col s12">
				<div class="row">
					<form action="guardar.php" method="post">
						<div class="input-field col s4">
							<input type="hidden" name="id" value="<?php echo $id ?>">							
							<input type="text" name="nombre" value="<?php echo $fila['nombre'] ?>">
							<label for="nombre">Nombre</label>
						</div>
						<div class="input-field col s4">
						<input type="text" name="tipo" value="<?php echo $fila['tipo'] ?>">
							<label for="Tipo">Tipo</label>
						</div>
						<div class="input-field col s4">
							<input type="number" name="padre" value="<?php echo $fila['padre'] ?>">
							<label for="Padre">Padre</label>							
						</div>
						<input type="submit" value="Actualizar" class="waves-effect grey lighten-1 btn-small">
					</form>					
				</div>
			</div>
		</div>
	</div>

</body>

</html>
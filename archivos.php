<!-- Pantalla principal del explorador donde se vizualiza la tabla de contenidos y 
donde se pueden insertar registros -->
<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html>

<head>
	<title>Sistema de Archivos en la Nube</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body>
	<div class="container">
		<h2>Explorador de Archivos</h2>
		<table class="highlight centered responsive-table">
			<thead>
				<th>Tipo</th>
				<th>id</th>
				<th>Nombre</th>
				<th>Acciones</th>
			</thead>
			<tbody>
				<?php
				$idPadre = $_GET['idPadre'];
				if ($idPadre == null) {
					echo "<script>    			
    				location.href = 'archivos.php?idPadre=0';    
    				</script>";
				}
				$resultado = $conexion->query("SELECT * FROM tbarchivos WHERE padre = $idPadre ");

				while ($fila = $resultado->fetch_assoc()) {
				?>
					<tr>
						<td><?php
							if ($fila['tipo'] == 'unidad' || ($fila['tipo'] == 'carpeta')) {
								print "<a href=archivos.php?idPadre=$fila[id]>";
							}
							switch ($fila['tipo']) {
								case 'unidad':
								case 'Unidad':
									print "<img src='icons\cd-rom.png'>";
									break;
								case 'carpeta':
								case 'Carpeta':
									print "<img src='icons\carpeta.png'>";
									break;
								case 'imagen':
								case 'Imagen':
									print "<img src='icons\jpg.png'>";
									break;
								case 'hoja de calculo':
								case 'Hoja de Cálculo':
									print "<img src='icons\xls.png'>";
									break;
								case 'documento':
								case 'Documento':
									print "<img src='icons\doc.png'>";
									break;
								case 'presentacion':
								case 'Presentación':
									print "<img src='icons\ppt.png'>";
									break;
								case 'pdf':
									print "<img src='icons\pdf.png'>";
									break;
								case 'mp3':
									print "<img src='icons\mp3.png'>";
									break;
								case 'mp4':
									print "<img src='icons\mp4.png'>";
									break;
							}
							?>
						</td>
						<td><?php echo $fila['id'] ?></td>
						<td><?php echo $fila['nombre'] ?></td>
						<td><a href="actualizar.php?id=<?php echo $fila['id'] ?>">Editar</a></td>
						<td><a href="borrar.php?id=<?php echo $fila['id'] ?>">Eliminar</a></td>
					</tr>
				<?php } ?>
			<tbody>
		</table>
		<h3>Insertar</h3>
		<div class="row">
			<div class="col s6">
				<div class="row">
					<div class="input-field col s6">
						<form action="insertar.php" method="post">
							<input type="text" name="nombre" placeholder="Nombre">
							<input type="text" name="tipo" placeholder="Tipo">
							<input type="text" name="padre" value="<?php echo $idPadre ?>" hidden><br><br>
							<input type="submit" value="Crear" class="waves-effect grey lighten-1 btn-small">
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>
</body>

</html>
<!-- se realiza el query sql necesario para la inserción con los datos ingresados en archivos.php -->
<?php include 'conexion.php';
$idPadre = $_POST['padre'];
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];	

$ins = $conexion -> query("INSERT INTO tbarchivos (nombre, tipo, padre) VALUES ('$nombre','$tipo','$idPadre')");
if ($ins) {
    echo "<script>
    location.href = 'archivos.php?idPadre=$idPadre';
    alert('El Registro fue creado exitosamente');
    </script>";
} else {
    echo "<script>
    location.href = 'archivos.php';
    alert('El Registro no pudo ser creado');
    </script>";
}
?>
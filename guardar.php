<!-- Se realiza el query sql necesario para la actualizacion de los datos realizada en actualizar.php -->
<?php include 'conexion.php';
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$padre = $_POST['padre'];

$up = $conexion -> query(" UPDATE tbarchivos SET nombre = '$nombre', tipo = '$tipo', padre = '$padre' WHERE id = '$id' ");
if ($up) {
    echo "<script>
    location.href = 'archivos.php';
    alert('El Registro fue actualizado exitosamente');
    </script>";
} else {
    echo "<script>
    location.href = 'archivos.php';
    alert('El Registro no pudo ser actualizado');
    </script>";
}

?>
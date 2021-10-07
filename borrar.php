<!-- Se realiza el query sql para la eliminación de un registro de la tabla mediante el botón Eliminar en archivos.php -->
<?php include 'conexion.php';
$id = $_REQUEST['id'];
$del = $conexion->query("DELETE FROM tbarchivos WHERE id = '$id' ");

if ($del) {
    echo "<script>
        alert('El Registro fue eliminado exitosamente');
        location.href = 'archivos.php';    
        </script>";
} else {
    echo "<script>
        alert('El Registro no pudo ser eliminado');
        location.href = 'archivos.php';    
        </script>";
}

?>
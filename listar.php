<?php
include 'conexion.php';
    $idPadre = $_GET['idPadre'];
    $resultado = $conexion -> query("SELECT * FROM tbarchivos WHERE padre = '$idPadre' ");
    
    while ($fila = $resultado -> fetch_assoc()) {
        print "<a href=listar.php?idPadre=$fila[id]>";
        print $fila['nombre'];       
        switch ($fila['tipo']) {
            case 'unidad':
                print "<img src='icons\cd-rom.png'>";            
                break;
            case 'carpeta':
                print "<img src='icons\carpeta.png'>";
                break;
            case 'imagen':
                print "<img src='icons\imagen.png'>";
                break;
            case 'hoja de calculo':
                print "<img src='icons\xls.png'>";
                break;
            case 'documento':
                print "<img src='icons\doc.png'>";
                break;
            case 'presentacion':
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
        
        print "</a><br>";
    }
?>
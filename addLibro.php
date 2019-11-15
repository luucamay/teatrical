<?php
include("conexion.php");
if(isset($_POST['add']))
{   
if(! get_magic_quotes_gpc() )
{
   $titulo = addslashes ($_POST['titulo']);
   $idioma = addslashes ($_POST['idioma']);
}
else
{
   $titulo = $_POST['titulo'];
   $idioma = $_POST['idioma'];
}

   $nropag = $_POST['nropag'];
   $fecha_publicacion = $_POST['fecha_publicacion'];
   $editorial = $_POST['editorial'];
   $pais = $_POST['pais'];

    $titulo = strtoupper($titulo);
    include("addDocument.php");
    $sql = "INSERT INTO libro (cod_item, fecha_publicacion, editorial, pais)        VALUES('$lastInsertId','$fecha_publicacion','$editorial', '$pais')";
    $retval = mysql_query( $sql);
    if(! $retval )
    {
      die('Could not enter data: ' . mysql_error());
    }
    echo "<br/>"."Libro data successfully";
    $direccion="pdfs/libros/";
    include("obtenerFile.php");
    // Liberar resultados
    mysql_free_result($result);

    // Cerrar la conexión
    mysql_close($link);
    echo '<meta http-equiv="Refresh" content="5;url=libros.php">';
}
?>

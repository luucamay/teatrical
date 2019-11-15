<?php
include("conexion.php");
if(isset($_POST['add']))
{   
if(! get_magic_quotes_gpc() )
{
   $titulo = addslashes ($_POST['titulo']);
   $idioma = addslashes ($_POST['idioma']);
   $tipo = addslashes ($_POST['tipo']);
}
else
{
   $titulo = $_POST['titulo'];
   $idioma = $_POST['idioma'];
   $tipo = $_POST['tipo'];
}
   
    $nropag = $_POST['nropag'];
    $fecha_creacion = $_POST['fecha_creacion'];
    $titulo = strtoupper($titulo);
    include("addDocument.php");
    $sql = "INSERT INTO libreto (cod_item, fecha_creacion, tipo)        VALUES('$lastInsertId','$fecha_creacion','$tipo')";
    $retval = mysql_query( $sql);
    if(! $retval )
    {
      die('Could not enter data: ' . mysql_error());
    }
    echo "<br/>"."Libreto data successfully";
    $direccion="pdfs/libretos/";
    include("obtenerFile.php");
    // Liberar resultados
    mysql_free_result($result);

    // Cerrar la conexión
    mysql_close($link);
    //echo '<meta http-equiv="Refresh" content="5;url=libretos.php">';
}
?>

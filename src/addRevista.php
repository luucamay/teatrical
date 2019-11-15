<?php
include("conexion.php");
{   
if(isset($_POST['add']))
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
   $editorial = $_POST['editorial'];
   $fecha_publicacion = $_POST['fecha_publicacion'];

    $titulo = strtoupper($titulo);
    include("addDocument.php");
    $sql = "INSERT INTO revista ".
       "(cod_item, fecha_publicacion, editorial) ".
       "VALUES('$lastInsertId', '$fecha_publicacion','$editorial')";
    $retval = mysql_query( $sql);
    if(! $retval )
    {
      die('Could not enter data: ' . mysql_error());
    }
    echo "<br/>"."revista data successfully";
    $direccion="pdfs/revistas/";
    include("obtenerFile.php");
    // Liberar resultados
    mysql_free_result($result);

    // Cerrar la conexión
    mysql_close($link);
    echo '<meta http-equiv="Refresh" content="5;url=revistas.php">';
}
?>

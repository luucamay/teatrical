<?php
include("conexion.php");
{   
if(isset($_POST['add']))
if(! get_magic_quotes_gpc() )
{
   $nombre = addslashes ($_POST['nombre']);
   $duracion = addslashes ($_POST['duracion']);
   $locacion = addslashes ($_POST['locacion']);
}
else
{
   $nombre = $_POST['nombre'];
   $duracion = $_POST['duracion'];
   $locacion = $_POST['locacion'];
}

   $fecha_creacion = $_POST['fecha_creacion'];
    $nombre = strtoupper($nombre);
    include("addMultimedia.php");
    $sql = "INSERT INTO video ".
       "(cod_item, locacion, fecha_creacion) ".
       "VALUES('$lastInsertId', '$locacion', '$fecha_creacion')";
    $retval = mysql_query( $sql);
    if(! $retval )
    {
      die('Could not enter data: ' . mysql_error());
    }
    echo "<br/>"."revista data successfully";
    $direccion="multimedia/videos/";
    include("obtenerFile.php");
    // Liberar resultados
    mysql_free_result($result);

    // Cerrar la conexión
    mysql_close($link);
    echo '<meta http-equiv="Refresh" content="5;url=videos.php">';
}
?>
<?php
include("conexion.php");
{   
if(isset($_POST['add']))
if(! get_magic_quotes_gpc() )
{
   $nombre = addslashes ($_POST['nombre']);
   $duracion = addslashes ($_POST['duracion']);
   $tipo = addslashes ($_POST['tipo']);
}
else
{
   $nombre = $_POST['nombre'];
   $duracion = $_POST['duracion'];
   $tipo = $_POST['tipo'];
}


    $nombre = strtoupper($nombre);
    include("addMultimedia.php");
    $sql = "INSERT INTO audio ".
       "(cod_item, tipo) ".
       "VALUES('$lastInsertId', '$tipo')";
    $retval = mysql_query( $sql);
    if(! $retval )
    {
      die('Could not enter data: ' . mysql_error());
    }
    echo "<br/>"."audio data successfully";
    $direccion="multimedia/audios/";
    include("obtenerFile.php");
    // Liberar resultados
    mysql_free_result($result);

    // Cerrar la conexión
    mysql_close($link);
    //echo '<meta http-equiv="Refresh" content="5;url=audios.php">';
}
?>

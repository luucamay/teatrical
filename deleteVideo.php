<?php

include("conexion.php");                    
if(! get_magic_quotes_gpc() )
{
   $nombre = addslashes ($_POST['nombre']);
}
else
{
   $nombre = $_POST['nombre'];
}
$nombre = strtoupper($nombre);

//obtenemos el codigo del nombre a eliminar
$sql = "SELECT cod_item FROM multimedia WHERE nombre like '$nombre'";
mysql_select_db('tae');
$retval = mysql_query( $sql);
if(! $retval )
{
  die('Problem: ' . mysql_error());
}
$fila = mysql_fetch_array($retval);
$cod_item = $fila['cod_item'];
//eliminando de video
$consulta="
    DELETE from video where cod_item = '$cod_item';
    ";
mysql_query($consulta);
//eliminando de multimedia
$consulta="
    DELETE from multimedia where cod_item = '$cod_item';
    ";
mysql_query($consulta);

//eliminando file
$sql="
    SELECT file from elemento where cod_item = '$cod_item';
    ";
$retval = mysql_query( $sql);
if(! $retval )
{
  die('Problem: ' . mysql_error());
}
$fila = mysql_fetch_array($retval);
$path=$fila['file'];
$path="multimedia/videos/".$patch;
include("deletefile.php");
//eliminando de elemento
$consulta="
    DELETE from elemento where cod_item = '$cod_item';
    ";
mysql_query($consulta);
echo 'video eliminado';
    // Liberar resultados
    mysql_free_result($result);

    // Cerrar la conexión
    mysql_close($link);

    echo '<meta http-equiv="Refresh" content ="5;url=videos.php">';
?>

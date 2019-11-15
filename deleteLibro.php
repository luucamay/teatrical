<?php

include("conexion.php");                    
if(! get_magic_quotes_gpc() )
{
   $titulo = addslashes ($_POST['titulo']);
}
else
{
   $titulo = $_POST['titulo'];
}
$titulo = strtoupper($titulo);

//obtenemos el codigo del titulo a eliminar
$sql = "SELECT cod_item FROM document WHERE titulo like '$titulo'";
mysql_select_db('tae');
$retval = mysql_query( $sql);
if(! $retval )
{
  die('Problem: ' . mysql_error());
}
$fila = mysql_fetch_array($retval);
$cod_item = $fila['cod_item'];
//eliminando de libro
$consulta="
    DELETE from libro where cod_item = '$cod_item';
    ";
mysql_query($consulta);
//eliminando de document
$consulta="
    DELETE from document where cod_item = '$cod_item';
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
$path="pdfs/libros/".$patch;
include("deletefile.php");
//eliminando de elemento
$consulta="
    DELETE from elemento where cod_item = '$cod_item';
    ";
mysql_query($consulta);
echo 'libro eliminado';
    // Liberar resultados
    mysql_free_result($result);

    // Cerrar la conexión
    mysql_close($link);

    echo '<meta http-equiv="Refresh" content ="5;url=libros.php">';
?>

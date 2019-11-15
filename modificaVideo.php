<?php
//Este sera el formulario para modificar el html y php
include("conexion.php");
                    
if(! get_magic_quotes_gpc() )
{
   $anterior = addslashes ($_POST['datoant']);
   $nuevo = addslashes ($_POST['datonew']);
}
else
{
   $anterior = $_POST['datoant'];
   $nuevo = $_POST['datonew'];
}
    $duracion = $_POST['duracion'];
    $locacion = $_POST['locacion'];
    $fecha_creacion = $_POST['fecha_creacion'];
    $anterior = strtoupper($anterior);
    $nuevo = strtoupper($nuevo);

//obtenemos el codigo del nombre a modificar
$sql = "SELECT cod_item FROM multimedia WHERE nombre like '$anterior'";
$retval = mysql_query( $sql);
if(! $retval )
{
  die('Problem: ' . mysql_error());
}
$fila = mysql_fetch_array($retval);
$cod_item = $fila['cod_item'];
//modificado de video
$sql = "UPDATE video SET locacion='$locacion', fecha_creacion='$fecha_creacion' WHERE cod_item = '$cod_item';";
    $retval = mysql_query( $sql);
    if(! $retval )
    {
      die('Could not modify data: ' . mysql_error());
    }
    echo '<br/>'."Modified video successfully".'<br/>';    
    $direccion="multimedia/videos/";
    include("modificaMultimedia.php");
   // echo '<meta http-equiv="Refresh" content ="5;url=videos.php">';
?>
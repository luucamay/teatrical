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
    $tipo = $_POST['tipo'];
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
//modificado de audio
$sql = "UPDATE audio SET tipo='$tipo' WHERE cod_item = '$cod_item';";
    $retval = mysql_query( $sql);
    if(! $retval )
    {
      die('Could not modify data: ' . mysql_error());
    }
    echo '<br/>'."Modified audio successfully".'<br/>';    
    $direccion="multimedia/audios/";
    include("modificaMultimedia.php");
   // echo '<meta http-equiv="Refresh" content ="5;url=libretos.php">';
?>
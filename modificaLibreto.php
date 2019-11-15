<?php
//Este sera el formulario para modificar el html y php
include("conexion.php");
                    
if(! get_magic_quotes_gpc() )
{
   $anterior = addslashes ($_POST['datoant']);
   $nuevo = addslashes ($_POST['datonew']);
   $idioma = addslashes ($_POST['idioma']);
   $tipo = addslashes ($_POST['tipo']);
}
else
{
   $anterior = $_POST['datoant'];
   $nuevo = $_POST['datonew'];
   $idioma = $_POST['idioma'];
   $tipo = $_POST['tipo'];
}
    $nropag = $_POST['nropag'];
    $fecha_creacion = $_POST['fecha_creacion'];
    $anterior = strtoupper($anterior);
    $nuevo = strtoupper($nuevo);

//obtenemos el codigo del titulo a modificar
$sql = "SELECT cod_item FROM document WHERE titulo like '$anterior'";
mysql_select_db('tae');
$retval = mysql_query( $sql);
if(! $retval )
{
  die('Problem: ' . mysql_error());
}
$fila = mysql_fetch_array($retval);
$cod_item = $fila['cod_item'];
//modificando de libreto
$sql = "UPDATE libreto SET tipo='$tipo', fecha_creacion='$fecha_creacion' WHERE cod_item = '$cod_item';";
    $retval = mysql_query( $sql);
    if(! $retval )
    {
      die('Could not modify data: ' . mysql_error());
    }
    echo '<br/>'."Modified libreto successfully".'<br/>';    
    include("modificaDocument.php");
// echo '<meta http-equiv="Refresh" content ="5;url=libretos.php">';
?>

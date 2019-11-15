<?php
//Este sera el formulario para modificar el html y php
include("conexion.php");
                    
if(! get_magic_quotes_gpc() )
{
   $anterior = addslashes ($_POST['datoant']);
   $nuevo = addslashes ($_POST['datonew']);
   $idioma = addslashes ($_POST['idioma']);
}
else
{
   $anterior = $_POST['datoant'];
   $nuevo = $_POST['datonew'];
   $idioma = $_POST['idioma'];
}
    $nropag = $_POST['nropag'];
    $fecha_publicacion = $_POST['fecha_publicacion'];
    $editorial = $_POST['editorial'];
    $anterior = strtoupper($anterior);
    $nuevo = strtoupper($nuevo);

//obtenemos el codigo del titulo a modificar
$sql = "SELECT cod_item FROM document WHERE titulo like '$anterior'";
$retval = mysql_query( $sql);
if(! $retval )
{
  die('Problem: ' . mysql_error());
}
$fila = mysql_fetch_array($retval);
$cod_item = $fila['cod_item'];
//modificando de revista
$sql = "UPDATE revista SET editorial='$editorial', fecha_publicacion='$fecha_publicacion' WHERE cod_item = '$cod_item';";
    $retval = mysql_query( $sql);
    if(! $retval )
    {
      die('Could not modify data: ' . mysql_error());
    }
    echo '<br/>'."Modified revista successfully".'<br/>';    
    $direccion="pdfs/revistas/";
    include("modificaDocument.php");
   // echo '<meta http-equiv="Refresh" content ="5;url=revistas.php">';
?>
<?php
include("addElemento.php");
    $sql = "INSERT INTO multimedia ".
       "(cod_item, nombre, duracion) ".
       "VALUES('$lastInsertId','$nombre', '$duracion')";
    $retval = mysql_query( $sql);
    if(! $retval )
    {
      die('Could not enter data: ' . mysql_error());
    }
    echo "Multimedia data successfully"."<br/>";
?>
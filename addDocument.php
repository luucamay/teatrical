<?php
    include("addElemento.php");
    $sql = "INSERT INTO document (cod_item, titulo, nropag, idioma)     VALUES('$lastInsertId','$titulo','$nropag','$idioma')";
    $retval = mysql_query( $sql);
    if(! $retval )
    {
      die('Could not enter data: ' . mysql_error());
    }
    echo "Document data successfully"."<br/>";
?>
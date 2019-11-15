<?php
//modificando de multimedia
$sql = "UPDATE multimedia SET nombre='$nuevo', duracion='$duracion' WHERE cod_item = '$cod_item';";
    $retval = mysql_query( $sql);
    if(! $retval )
    {
      die('Could not modify data: ' . mysql_error());
    }
    echo '<br/>'."Modified multimedia successfully".'<br/>';    
    
//modificando elemento
$lastInsertId = $cod_item;
include("obtenerFile.php");    

// Liberar resultados
    mysql_free_result($result);

    // Cerrar la conexión
    mysql_close($link);
?>
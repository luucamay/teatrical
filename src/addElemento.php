<?php
$sql = "INSERT INTO elemento ".
       "(fecha_ingreso) ".
       "VALUES(NOW())";
    $retval = mysql_query( $sql);
    if(! $retval )
    {
      die('Could not enter data: ' . mysql_error());
    }
    echo '<br/>'."elemnto inserted successfully".'<br/>';    
    $lastInsertId = mysql_insert_id();
    echo $lastInsertId.'<br/>';
?>
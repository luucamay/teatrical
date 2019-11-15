<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="mobilStyle.css"/>
</head>
<body>

<div class="header">
<h1>Tae - Umsa</h1>
</div>

<div class="row">
<?php include('menu.html');?>

<div class="col-9 col-m-9">
<div id="videos">
    <h2>Multimedia --> Videos</h2>
    <div class="aside">
    <ul>
      <li><a href="fvadicionar.php">Adicionar</a></li>
      <li><a href="fvmodificar.php">Modificar</a></li>
      <li><a href="fveliminar.php">Eliminar</a></li>
    </ul>
    </div>

    <?php
    include("conexion.php");                          
    // Realizar una consulta MySQL
    $query = 'SELECT e.cod_item, m.nombre, m.duracion, v.locacion, v.fecha_creacion, e.file
                                FROM elemento e, multimedia m, video v
                                WHERE e.cod_item=m.cod_item
                                AND m.cod_item = v.cod_item
                                ORDER BY e.cod_item';
    $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
    // Imprimir los resultados en HTML
?>
    <?php
    while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
        ?>
    <div class="float_l element">
        <h3><?php echo $row[1];?></h3>
        <div class="float_l">
        <ul>
        <li><?php echo $row[2];?></li>
        <li><?php echo $row[3];?></li>
        <li><?php echo $row[4];?></li>
        </ul>
        </div>
        <div class="float_l">
            <a href=<?php echo $row[5];?> target='_blank'><img src='images/play.png' alt='pdf Imagen' rel='nofollow' class='icon'/></a>    
        </div>
    </div>
    
        <?php
    }
    // Liberar resultados
    mysql_free_result($result);
    // Cerrar la conexión
    mysql_close($link);
    ?>	
</div> <!-- end of libros -->

</div>
    

</div>

<div class="footer">
<p><?php include("footer.html");?></p>
</div>

</body>
</html>
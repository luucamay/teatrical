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
<div id="revistass">
    <h2>Documentos --> Revistass</h2>
    <div class="aside">
    <ul>
      <li><a href="fradicionar.php">Adicionar</a></li>
      <li><a href="frmodificar.php">Modificar</a></li>
      <li><a href="freliminar.php">Eliminar</a></li>
    </ul>
    </div>

    <?php
    include("conexion.php");                          
    // Realizar una consulta MySQL
    $query = 'SELECT e.cod_item, d.titulo, d.nropag, d.idioma, r.editorial, r.fecha_publicacion, e.fecha_ingreso, e.file
                                FROM elemento e, document d, revista r
                                WHERE e.cod_item=d.cod_item
                                AND d.cod_item = r.cod_item
                                ORDER BY d.cod_item';
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
        <li>Nro pag: <?php echo $row[2];?></li>
        <li><?php echo $row[3];?></li>
        <li><?php echo $row[4];?></li>
        <li><?php echo $row[5];?></li>
        <li><?php echo $row[6];?></li>
        </ul>
        </div>
        <div class="float_l">
            <a href=<?php echo $row[7];?> target='_blank'><img src='images/iconpdf.png' alt='pdf Imagen' rel='nofollow' class='icon'/></a>    
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
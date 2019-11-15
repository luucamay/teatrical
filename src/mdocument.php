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
    
    <div id="document">
        <h2>Documentos</h2>
        <div class="float_l submenu">
        <a href="mlibretos.php"><img src="images/libreto.png" alt="Image 03" rel="nofollow" class="image_wrapper" /><br/><caption>Libretos</caption></a>
        </div>
        <div class="float_l submenu">
        <a href="mrevistas.php"><img src="images/revista.png" alt="Image 03" rel="nofollow" class="image_wrapper" /><br/><caption>Revistas</caption></a>
        </div>
        <div class="float_l submenu">
        <a href="mlibros.php"><img src="images/libro.png" alt="Image 03" rel="nofollow" class="image_wrapper" /><br/><caption>Libros</caption></a>
        </div>
    </div> <!-- end of document -->
    
</div>

</div>

<div class="footer">
<p><?php include("footer.html");?></p>
</div>

</body>
</html>
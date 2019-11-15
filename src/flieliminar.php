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
        <div class="panel" id="eliminar">
            <h2>Eliminar libro</h2>
            <div class="formulario">
            <form method="post" name="eliminar" action="deleteLibro.php" enctype="multipart/form-data">
                <input type="text" name="titulo" value="Titulo" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Titulo';}" required/>
                <input type="submit" name="delete" value="Elimina"/>
                <input type="reset" name="reset" id="reset" value="Reset"/>        
                <button type="button" onclick="window.location.href='mlibros.php';">Volver</button>

            </form>
        </div>
        </div>
    </div>
    
</div>

<div class="footer">
<p><?php include("footer.html");?></p>
</div>

</body>
</html>
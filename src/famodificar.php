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
<?php include("menu.html");?>
    
<div class="col-9 col-m-9">
    <div class="panel" id="modificar">
        <h2>Modificar audio</h2>
        <div class="formulario">
        <form method="post" name="modificar" action="modificaAudio.php" enctype="multipart/form-data">          
            <input type="text" name="datoant" value="Audio a modificar" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Audio a modificar';}" required/>
            <input type="text" name="datonew" value="Nuevo nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nuevo nombre';}" required/>
            <input type="text" name="duracion" value="Nuevo duracion" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nuevo duracion';}" />
            <input type="text" name="tipo" value="Nuevo tipo" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nuevo tipo';}" />        
            <input type="file" name="file"/>       
            <input type="submit" name="modificar" value="Modifica"/>
            <input type="reset" name="reset" id="reset" value="Reset"/>        
            <button type="button" onclick="window.location.href='maudios.php';">Volver</button>

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
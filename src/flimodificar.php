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
        <h2>Modificar libro</h2>
        <div class="formulario">
        <form method="post" name="modificar" action="modificaLibro.php" enctype="multipart/form-data">          
            <input type="text" name="datoant" value="Libro a modificar" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Libro a modificar';}" required/>
            <input type="text" name="datonew" value="Nuevo titulo" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nuevo titulo';}" required/>
            <input type="text" name="idioma" value="Nuevo idioma" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nuevo idioma';}" />
            <input type="text" name="nropag" value="Nuevo nro paginas" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nuevo nro paginas';}" />    
            <input type="text" name="pais" value="Nuevo pais" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nuevo pais';}" />        
            <input type="text" name="editorial" value="Nuevo editorial" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nuevo editorial';}" />        
            <input type="text" name="fecha_publicacion" value="Nueva fecha publicacion" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nuevo fecha publicacion';}" >
            <input type="file" name="file"/>       
            <input type="submit" name="modificar" value="Modifica"/>
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

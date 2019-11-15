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
    <div class="panel" id="adicionar">
        <h2>Adicionar libreto</h2>
        <div class="formulario">
        <form method="post" name="adicionar" action="addLibreto.php" enctype="multipart/form-data">
            <input type="text" name="titulo" value="Titulo" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Titulo';}" required/>
            <input type="text" name="idioma" value="Idioma" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Idioma';}" />
            <input type="text" name="nropag" value="Nro Paginas" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nro Paginas';}" />    
            <input type="text" name="fecha_creacion" value="Fecha Creacion" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Fecha Creacion';}" >
            <input type="text" name="tipo" value="Tipo" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tipo';}" />        
            <input type="file" name="file" />       
            <input type="submit" name="add" value="Adiciona"/>
            <input type="reset" name="reset" id="reset" value="Reset"/>        
            <button type="button" onclick="window.location.href='mlibretos.php';">Volver</button>

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

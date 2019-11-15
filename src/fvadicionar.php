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
        <h2>Adicionar video</h2>
        <div class="formulario">
        <form method="post" name="adicionar" action="addVideo.php" enctype="multipart/form-data">
            <input type="text" name="nombre" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre';}" required/>
            <input type="text" name="duracion" value="Duracion" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Duracion';}" />
            <input type="text" name="locacion" value="Locacion" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Locacion';}" />        
            <input type="text" name="fecha_creacion" value="Fecha de creacion" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Fecha de creacion';}" />        
            <input type="file" name="file" />       
            <input type="submit" name="add" value="Adiciona"/>
            <input type="reset" name="reset" id="reset" value="Reset"/>        
            <button type="button" onclick="window.location.href='mvideos.php';">Volver</button>
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
<?php 
$page_title = "Libros";
$page_description = "Description of this page";
include("header.php"); ?>
<body>
<div id="slider">
    <div id="tooplate_wrapper">
        <div id="tooplate_sidebar">
            <div id="header">
            	<h1><a href="#">Vertiwood Template</a></h1>
            </div>
            <div id="menu">
                <ul class="navigation">
                	<li><a href="index5.php">TAE</a></li>
                    <li><a href="index5.php#document" class="selected">Documentos</a></li>
                    <li><a href="index5.php#multimedia" class="last">Multimedia</a></li>
                </ul>
            </div>
        </div> <!-- end of sidebar -->      	
        <div id="content">
       	  	<div class="scroll">
        	  <div class="scrollContainer">
                  <div class="panel" id="libros">
                    <h2>Documentos --> Libros</h2>
                    <?php
                    include("conexion.php");                          
                    // Realizar una consulta MySQL
                    $query = 'SELECT e.cod_item, d.titulo, d.idioma, d.nropag, l.editorial, l.pais, l.fecha_publicacion, e.fecha_ingreso, e.file
                                FROM elemento e, document d, libro l
                                WHERE e.cod_item=d.cod_item
                                AND d.cod_item = l.cod_item
                                ORDER BY d.cod_item';
                    $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
                    // Imprimir los resultados en HTML
                    echo "<table class='tdatatable'>";
                    echo '<tr><th>cod doc</th><th>titulo</th><th>nropag</th><th>idioma</th><th>editorial</th><th>pais</th><th>fecha publicacion</th><th>fecha ingreso</th><th>Ver archivo</th></tr>';
                    while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
                        echo "<tr>";
                        echo "<td> $row[0] </td>";
                        echo "<td> $row[1] </td>";
                        echo "<td> $row[2] </td>";
                        echo "<td> $row[3] </td>";
                        echo "<td> $row[4] </td>";
                        echo "<td> $row[5] </td>";
                        echo "<td> $row[6] </td>";
                        echo "<td> $row[7] </td>";
                        echo "<td style='text-align: center'><a href=$row[8] target='_blank'><img src='images/iconpdf.png' alt='pdf Imagen' rel='nofollow' class='icon'/></a></td>";
                        echo "</tr>";
                    }
                    echo "</table>\n";
                    // Liberar resultados
                    mysql_free_result($result);
                    // Cerrar la conexión
                    mysql_close($link);
                    ?>				    
				    <ul class="boton">
                      <li><a href="#adicionar">Adicionar</a></li>
                      <li><a href="#modificar">Modificar</a></li>
                      <li><a href="#eliminar">Eliminar</a></li>
                    </ul>		 
      	      	</div> <!-- end of libros -->
                <div class="panel" id="adicionar">
                    <div class="cleaner h30"></div>
                    <h2>Adiconar libro</h2>
                    <div class="cleaner h30"></div>
                    <div class="formulario">
                    <form method="post" name="adicionar" action="addLibro.php" enctype="multipart/form-data">
                    <table>
                    <tr>
                    <td><label for="titulo">Titulo:</label></td>
                    <td><input type="text" name="titulo" class="input_field" required /></td>
                    </tr>
                    <tr>
                    <td><label for="idioma">Idioma:</label></td>
                    <td><input type="text" name="idioma" class="input_field" /></td>
                    </tr>
                    <tr>
                    <td><label for="nropag">Nro Paginas:</label></td>
                    <td><input type="number" name="nropag" class="input_field" />
                    </td>
                    </tr>
                    <tr>
                    <td><label for="editorial">Editorial:</label></td>
                    <td><input type="text" name="editorial" class="input_field" /></td>
                    </tr>
                    <tr>
                    <td><label for="pais">Pais:</label></td>
                    <td><input type="text" name="pais" class="input_field" /></td>
                    </tr>
                    <tr>
                    <td><label for="fecha_publicacion">Fecha de publicacion</label></td>
                    <td><input type="text" name="fecha_publicacion" class="input_field" ></td>
                    </tr>
                    <tr>
                    <td><label for="file">Archivo:</label></td>
                    <td><input type="file" name="file" /></td>
                    </tr>
                    <tr>
                    <td><input type="submit" class="submit_btn float_l" name="add" value="Add Libro"/></td>
                    <td><input type="reset" class="submit_btn float_r" name="reset" id="reset" value="Reset"/></td>
                    </tr>
                    <tr>
                    <td colspan="2"><ul class="boton float_r"><li><a href="libros.php">Volver</a></li></ul></td>
                    </tr>
                </table>
                </form>
                <div class="cleaner h30"></div>
                </div>
                <div class="panel" id="modificar">
                    <h2>Modificar libro</h2>
                    <div class="formulario">
                    <form method="post" name="modificar" action="modificaLibro.php" enctype="multipart/form-data">
                    <table>
                    <tr>
                    <td colspan="2"><label for="datoant">Libro a modificar:</label></td>
                    </tr>
                    <tr>
                    <td colspan="2"><input type="text" name="datoant" class="input_field" required/></td>
                    </tr>
                    <tr>
                    <td><label for="datonew">Titulo:</label></td>
                    <td><input type="text" name="datonew" class="input_field" placeholder="Nuevo titulo"/></td>
                    </tr>
                    <tr>
                    <td><label for="idioma">Idioma:</label></td>
                    <td><input type="text" name="idioma" class="input_field" placeholder="Nuevo idioma"/></td>
                    </tr>
                    <tr>
                    <td><label for="nropag">Nro Paginas:</label></td>
                    <td><input type="number" name="nropag" class="input_field" placeholder="Nuevo nroPaginas"/>
                    </td>
                    </tr>
                    <tr>
                    <td><label for="pais">Pais:</label></td>
                    <td><input type="text" name="pais" class="input_field"  placeholder="Nuevo Pais"/></td>
                    </tr>
                    <tr>
                    <td><label for="editorial">Editorial:</label></td>
                    <td><input type="text" name="editorial" class="input_field"  placeholder="Nueva Editorial"/></td>
                    </tr>
                    <tr>
                    <td><label for="pais">Fecha de publicacion:</label></td>
                    <td><input type="text" name="pais" class="input_field"  placeholder="Nuevo fecha de publicacion"/></td>
                    </tr>
                    <tr>
                    <td><label for="file">Nuevo Archivo:</label></td>
                    <td><input type="file" name="file" /></td>
                    </tr>
                    <tr>
                    <td><input type="submit" class="submit_btn float_l" name="modificar" value="Modificar Libro"/></td>
                    <td><input type="reset" class="submit_btn float_r" name="reset" id="reset" value="Reset"/></td>
                    </tr>
                    </tr>
                    <tr>
                    <td colspan="2"><ul class="boton float_r"><li><a href="libros.php">Volver</a></li></ul></td>
                    </tr>
                </table>
                </form>
                <div class="cleaner h30"></div>
                <div class="cleaner h30"></div>
                <div class="cleaner h30"></div>
                </div>
                </div>
                <div class="panel" id="eliminar">
                    <div class="cleaner h30"></div>
                    <h2>Eliminar libro</h2>
                    <div class="cleaner h30"></div>
                    <div class="formulario">
                    <form method="post" name="eliminar" action="deleteLibro.php" enctype="multipart/form-data">
                    <table>
                    <tr>
                    <td><label for="titulo">Titulo:</label></td>
                    <td><input type="text" name="titulo" class="input_field" required/></td>
                    </tr>
                    <tr>
                    <td><input type="submit" class="submit_btn float_l" name="delete" value="Eliminar Libro"/></td>
                    <td><input type="reset" class="submit_btn float_r" name="reset" id="reset" value="Reset"/></td>
                    </tr>
                    </tr>
                    <tr>
                    <td colspan="2"><ul class="boton float_r"><li><a href="libros.php">Volver</a></li></ul></td>
                    </tr>
                </table>
                </form>
                </div>
                </div>
                </div> <!-- end of scroll -->
            </div>
        <div class="cleaner"></div>
        </div>
    </div> <!-- end of content -->
    <?php include("footer.html");?>
</div>
</body>
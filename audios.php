<?php 
$page_title = "Audios";
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
                    <li><a href="index5.php#document">Documentos</a></li>
                    <li><a href="index5.php#multimedia" class="last selected">Multimedia</a></li>
                </ul>
            </div>
        </div> <!-- end of sidebar -->      	
        <div id="content">
       	  	<div class="scroll">
        	  <div class="scrollContainer">
                  <div class="panel" id="audios">
                    <h2>Multimedia --> Audios</h2>
                    <?php
                    include("conexion.php");                          
                    // Realizar una consulta MySQL
                    $query = 'SELECT e.cod_item, m.nombre, m.duracion, a.tipo, e.file
                                FROM elemento e, multimedia m, audio a
                                WHERE e.cod_item=m.cod_item
                                AND m.cod_item = a.cod_item
                                ORDER BY e.cod_item';
                    $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
                    // Imprimir los resultados en HTML
                    echo '<table class="tdatatable">';
                    echo '<tr><th>cod</th><th>nombre</th><th>duracion</th><th>tipo</th><th>Ver archivo</th></tr>';
                    while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
                        echo "<tr>";
                        echo "<td> $row[0] </td>";
                        echo "<td> $row[1] </td>";
                        echo "<td> $row[2] </td>";
                        echo "<td> $row[3] </td>";
                        echo "<td style='text-align: center'><a href=$row[4] target='_blank'><img src='images/play.png' alt='play' rel='nofollow' class='icon'/></a></td>";
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
      	      	</div> <!-- end of audios -->
                <div class="panel" id="adicionar">
                    <div class="cleaner h30"></div>
                    <h2>Adicionar Audio</h2>
                    <div class="cleaner h30"></div>
                    <div class="formulario">
                    <form method="post" name="adicionar" action="addAudio.php" enctype="multipart/form-data">
                    <table>
                    <tr>
                    <td><label for="nombre">Nombre:</label></td>
                    <td><input type="text" name="nombre" class="input_field" required /></td>
                    </tr>
                    <tr>
                    <td><label for="duracion">Duracion:</label></td>
                    <td><input type="text" name="duracion" class="input_field" /></td>
                    </tr>
                    <tr>
                    <td><label for="tipo">Tipo:</label></td>
                    <td><input type="text" name="tipo" class="input_field" /></td>
                    </tr>
                    <tr>
                    <tr>
                    <td><label for="file">Archivo:</label></td>
                    <td><input type="file" name="file" /></td>
                    </tr>
                    <tr>
                    <td><input type="submit" class="submit_btn float_l" name="add" value="Add Elemento"/></td>
                    <td><input type="reset" class="submit_btn float_r" name="reset" id="reset" value="Reset"/></td>
                    </tr>
                    <tr>
                    <td colspan="2"><ul class="boton float_r"><li><a href="audios.php">Volver</a></li></ul></td>
                    </tr>
                </table>
                </form>
                <div class="cleaner h60"></div>
                <div class="cleaner h50"></div>
                </div>
                <div class="panel" id="modificar">
                    <div class="cleaner h30"></div>
                    <h2>Modificar Audio</h2>
                    <div class="cleaner h30"></div>
                    <div class="formulario">
                    <form method="post" name="modificar" action="modificaAudio.php" enctype="multipart/form-data">
                    <table>
                    <tr>
                    <td colspan="2"><label for="datoant">Audio a modificar:</label></td>
                    </tr>
                    <tr>
                    <td colspan="2"><input type="text" name="datoant" class="input_field" required/></td>
                    </tr>
                    <tr>
                    <td><label for="datonew">Nombre:</label></td>
                    <td><input type="text" name="datonew" class="input_field" placeholder="Nuevo nombre"/></td>
                    </tr>
                    <tr>
                    <td><label for="duracion">Duracion:</label></td>
                    <td><input type="text" name="duracion" class="input_field" placeholder="Nueva duracion"/></td>
                    </tr>
                    <tr>
                    <td><label for="tipo">Tipo:</label></td>
                    <td><input type="text" name="tipo" class="input_field" placeholder="Nuevo tipo"/></td>
                    </tr>
                    <tr>
                    <td><label for="file">Nuevo Archivo:</label></td>
                    <td><input type="file" name="file" /></td>
                    </tr>
                    <tr>
                    <td><input type="submit" class="submit_btn float_l" name="modificar" value="Modificar Audio"/></td>
                    <td><input type="reset" class="submit_btn float_r" name="reset" id="reset" value="Reset"/></td>
                    </tr>
                    </tr>
                    <tr>
                    <td colspan="2"><ul class="boton float_r"><li><a href="audios.php">Volver</a></li></ul></td>
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
                    <h2>Eliminar Audio</h2>
                    <div class="cleaner h30"></div>
                    <div class="formulario">
                    <form method="post" name="eliminar" action="deleteAudio.php" enctype="multipart/form-data">
                    <table>
                    <tr>
                    <td><label for="nombre">Nombre:</label></td>
                    <td><input type="text" name="nombre" class="input_field" required/></td>
                    </tr>
                    <tr>
                    <td><input type="submit" class="submit_btn float_l" name="delete" value="Eliminar Audio"/></td>
                    <td><input type="reset" class="submit_btn float_r" name="reset" id="reset" value="Reset"/></td>
                    </tr>
                    </tr>
                    <tr>
                    <td colspan="2"><ul class="boton float_r"><li><a href="audios.php">Volver</a></li></ul></td>
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
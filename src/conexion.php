<?php                    
// Conectando, seleccionando la base de datos
$link = mysql_connect('localhost:3306', 'root', 'holamundo')
                        or die('No se pudo conectar: ' . mysql_error());

mysql_select_db('tae') or die('No se pudo seleccionar la base de datos');                                   
?>
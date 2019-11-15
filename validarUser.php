<?php
    //CONEXION CON LA BASE DE DATOS
    mysql_connect('localhost','root','holamundo');
    $db = 'tae';
    mysql_select_db($db);
    //Convertimos las variables del fromulario a variables php
    $nombre = $_POST['nombre'];
    $password = sha1($_POST['password']);
    $nombre=strtolower($nombre);
    //Consultas SQL
    $query = "SELECT id, nombre, apellido FROM usuarios WHERE nombre= '".$nombre."' and password = '".$password."';";
    $resultado = mysql_query($query);
    if(mysql_num_rows($resultado) == 1){
        $fila = mysql_fetch_array($resultado);
        echo 'Has iniciado sesion '.$fila['id'].' '.strtoupper($fila['nombre']).' '.strtoupper($fila['apellido']);
        //la sentencia de abajo hace que en 5 segundos te mande a otra pagina web
        echo '<meta http-equiv="Refresh" content ="3;url=index6.php">';
    } else {
        echo 'Tus datos no coinciden';
        echo $password;
        echo '<meta http-equiv="Refresh" content ="8;url=index.html">';
    }


?>
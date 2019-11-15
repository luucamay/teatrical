<?php
$file = basename($_FILES['file']['name']);
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
  $folder=$direccion;

     echo '<br> file: '.$file;
     echo '<br> fileSize: '.$file_size;
     echo '<br> fileType: '.$file_type;
     echo '<br> folder: '.$folder;
//$folder="uploads/";
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
     echo '<br>'.$folder;
     echo '<br>'.$file;
     echo '<br>last inserted: '.$lastInsertId;
     $final_file=$folder.$final_file;
  $sql="UPDATE elemento SET file='$final_file', type='$file_type', size='$new_size' WHERE cod_item = '$lastInsertId';";
     $retval = mysql_query($sql);
     if(! $retval )
    {
      die('Could not enter data: ' . mysql_error());
    }
     echo '<a href="libretos.php">file uploaded</a>';
 }
 else
 {
  echo '<a href="libretos.php">error while uploading file</a>';
 }
?>

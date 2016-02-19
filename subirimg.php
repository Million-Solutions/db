<?php
include ('core/core.php');
$id = $_SESSION['id'];
if(!empty($_POST['emailedit']) or !empty($_POST['passedit']) or !empty($_FILES['file']['name'])){
if(!empty($_FILES['file']['name'])){
// Creamos la cadena aletoria
$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvw xyz1234567890";
$cad = "";
for($i=0;$i<12;$i++) {
$cad .= substr($str,rand(0,62),1);
}
// Fin de la creacion de la cadena aletoria
$tamano = $_FILES [ 'file' ][ 'size' ]; // Leemos el tamaño del fichero
$tamaño_max="50000000000"; // Tamaño maximo permitido
if( $tamano < $tamaño_max){ // Comprovamos el tamaño
$destino = 'styles/images' ; // Carpeta donde se guardata
$sep=explode('image/',$_FILES["file"]["type"]); // Separamos image/
$tipo=$sep[1]; // Optenemos el tipo de imagen que es

if($tipo == "gif" or $tipo == "pjpeg" or $tipo == "bmp" or $tipo == "jpg" or $tipo == "jpeg" or $tipo == "png"){ // Si el tipo de imagen a subir es el mismo de los permitidos, segimos. Puedes agregar mas tipos de imagen
move_uploaded_file ( $_FILES [ 'file' ][ 'tmp_name' ], $destino . '/' .$cad.'.'.$tipo); // Subimos el archivo
  $file = $destino . '/' .$cad.'.'.$tipo;
  $db = new Conexion();
  $sqle = "SELECT * FROM user WHERE id ='$id'";
  $result = $db->query($sqle);
  $sqle = "UPDATE user SET file='$file'";
  $result = $db->query($sqle);
    $_SESSION['file']=$file;
  unset($sqle,$result);
  header('location: index.php');

}
#else echo "el tipo de archivo no es de los permitidos";// Si no es el tipo permitido lo desimos
}
#else echo "El archivo supera el peso permitido.";// Si supera el tamaño de permitido lo desimos
}

if(isset($_POST['emailedit'])){
  $email = $_POST['emailedit'];
  $db = new Conexion();
  $sqle = "SELECT * FROM user WHERE id ='$id'";
  $result = $db->query($sqle);
  $sqle = "UPDATE user SET email='$email'";
  $result = $db->query($sqle);
  unset($sqle,$result);
  $_SESSION['email']=$email;
  header('location: index.php');


}
if(isset($_POST['passedit'])){
  $pass = MD5($_POST['passedit']);
  $db = new Conexion();
  $sqle = "SELECT * FROM user WHERE id ='$id'";
  $result = $db->query($sqle);
  $sqle = "UPDATE user SET pass='$pass'";
  $result = $db->query($sqle);
  unset($sqle,$result);
  header('location: index.php');
}
}else{
  header('location: index.php');

}
?>

<?php

include 'core/core.php';
$con= new Conexion();


if(isset($_POST['q'])){
    $q=$_POST['q'];
    $b=$_POST['b'];
    $a=$_POST['a'];
    $sql="select * from user where id LIKE '".$a."%'";
$res=$con->query($sql);

if(mysqli_num_rows($res)==0){

echo 'No user';

}else{


while($fila=mysqli_fetch_array($res)){
  $estado = $fila['status'];
  $id = $fila['id'];
  $user = $fila['user'];

}
if($estado == 1){
  $sqle = "SELECT * FROM user WHERE user='$user' and id ='$id' and status = '$estado'";
  $result = $con->query($sqle);
  $sqle = "UPDATE user SET status='2'";
  $result = $con->query($sqle);
echo '<i class="fa fa-circle text-muted" ></i>Desconectado';
}else{
  $sqle = "SELECT * FROM user WHERE user='$user' and id ='$id' and status = '$estado'";
  $result = $con->query($sqle);
  $sqle = "UPDATE user SET status='1'";
  $result = $con->query($sqle);
echo '<i class="fa fa-circle text-success" ></i>Conectado';
}
}
}
if(isset($_POST['d'])){
    $d=$_POST['d'];
    $c=$_POST['c'];
    $e=$_POST['e'];
    $sql="select * from user where id LIKE '".$e."%'";
$res=$con->query($sql);

if(mysqli_num_rows($res)==0){

echo 'No user';

}else{


while($fila=mysqli_fetch_array($res)){
  $estado = $fila['status'];
  $id = $fila['id'];
  $user = $fila['user'];
  if($estado == 1){
    echo '<i class="fa fa-circle text-success" ></i>Conectado';
  }else{
    echo '<i class="fa fa-circle text-muted" ></i>Desconectado';
  }
}

}
}

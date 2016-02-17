<?php
class Salir{
  private $user;
  private $id;
  private $status;

  public function Logout(){
    $this->user = $_POST['user'];
    $this->id = $_POST['id'];
    $this->status = $_POST['status'];

    $db = new Conexion();
    $sqle = "SELECT * FROM user WHERE user='$this->user' and id ='$this->id' and status = '$this->status'";
    $result = $db->query($sqle);
    if($this->status < 2){
    $sqle = "UPDATE user SET status='2'";
    $result = $db->query($sqle);
    unset($sqle,$result);
    }
  }
  public function Entrar(){
    $this->user = $_SESSION['user'];
    $this->id = $_SESSION['id'];
    $this->status = $_SESSION['estado'];
    $db = new Conexion();
    $sqle = "SELECT * FROM user WHERE user='$this->user' and id ='$this->id' and status = '$this->status'";
    $result = $db->query($sqle);
    $sqle = "UPDATE user SET status='1'";
    $result = $db->query($sqle);
    $sqle = "SELECT * FROM user WHERE user='$this->user' and id ='$this->id'";
    $result = $db->query($sqle);
    $datos = $db->recorrer($result);
    $_SESSION['status'] = $datos['status'];
  }
}

?>

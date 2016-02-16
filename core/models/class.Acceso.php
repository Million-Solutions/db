<?php
class Acceso{
  private $user;
  private $pass;
  private $email;

  public function Login(){
    try{
        if(!empty($_POST['user']) and !empty($_POST['pass']) and !empty($_POST['session'])){
              $db = new Conexion();
              $this->user = $db->real_escape_string($_POST['user']);
              $this->pass = MD5($_POST['pass']);
              $sql = $db->query("SELECT * FROM user WHERE user='$this->user' AND pass='$this->pass'");

              if($db->rows($sql) > 0){
                echo 1;

                $nombre_sesion="login";
                $duracion_sesion = 2*7*24*60*60;
                session_name($nombre_sesion);

                $datos = $db->recorrer($sql);
                $_SESSION['id'] = $datos['id'];
                $_SESSION['user'] = $datos['user'];
                $_SESSION['email'] = $datos['email'];
                $_SESSION['datein'] = $datos['datein'];
                $_SESSION['rol'] = $datos['rol'];
                $_SESSION['session'] = $_POST['session'];
                if($datos['status'] == 1){ $_SESSION['status'] = 'Conectado'; }else{ $_SESSION['status'] = 'Desconetado'; }
                                if($_POST['session'] == true) {
                                  ini_set("session.use_cookies", 1);
                                  ini_set("session.use_only_cookies", 1);
                                  ini_set("session.cookie_lifetime",$duracion_sesion);
                                  ini_set('session.gc_maxlifetime', $duracion_sesion);
                                  session_cache_expire($duracion_sesion);
                                  session_set_cookie_params($duracion_sesion);}
          session_start();
              }else{
            throw new Exception(2);
              }
              $db->liberar($sql);
              $db->close();
        }else{
            throw new Exception("Error Procesando lo requerido");

        }
    }catch(Exception $e){
      echo $e->getMessage();
    }
  }
  public function Recuperar(){

  }
}

 ?>

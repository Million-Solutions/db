<?php

  class Conexion extends mysqli {

    public function __construct() {
        parent::__construct(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        $this->query("SET NAMES utf8;");
        date_default_timezone_set('America/Guayaquil');
        $this->connect_errno ? die('ERROR: Datos incorrectos en /core/models/class.Connect.php') : null;
    }

    public function rows($x) {
        return mysqli_num_rows($x);
    }

    public function recorrer($x) {
        return mysqli_fetch_array($x);
    }

    public function liberar($x) {
        return mysqli_free_result($x);
    }

    public function preparada() {
        return mysqli_stmt_init();
    }

}

?>

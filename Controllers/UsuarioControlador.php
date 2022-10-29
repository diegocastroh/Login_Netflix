<?php
class UsuarioControlador{

    public function acceso(){
        include_once("Models/usuarios.php");
        $sql = "SELECT * FROM usuarios"; /* Consulta SQL */
        $consult = new Usuario(); /* Instancia de conexión */
        $users = $consult->listuser($sql); /* Se realiza la consulta */
        /* Se recorre el resultado de la Tabla */
        include("Views/login.php");
    }

    public function registro(){
        include("Views/registro.php");
    }
}
?>
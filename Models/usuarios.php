<?php
    class Usuario{
        private $id;
        private $nombre;
        private $apellidos;
        private $direccion;
        private $rol;
        private $correo;
        private $conexion;
        function __construct(){
            require_once("Config/config.php");
            $this->conexion = new Conexion();
            $this->conexion->conectar();
        }
        function listuser($sql){
            $result = $this->conexion->conexion->query($sql);
            return $result;
            $this->conexion->cerrar();
        }
    }
?>
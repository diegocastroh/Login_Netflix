<?php
    class Consultas{
        private $conexion;
        function __construct(){
            require_once 'config.php';
            $this->conexion = new conexion();
            $this->conexion->conectar();
        }
        function consulta($sql){
            $result = $this->conexion->conexion->query($sql);
            return $result;
            $this->conexion->cerrar();
        }
    }
?>
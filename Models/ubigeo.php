<?php
    class Ubigeo{
        private $conexion;
		/* Creamos el metodo constructor */
        function __construct(){
            require_once 'Config/config.php';
			/* Iniciamos la conexión */
            $this->conexion = new conexion();
            $this ->conexion->conectar();
        }

		/* DEPARTAMENTOS: Crea un array y lo retorna con los datos obtenidos de la base de datos de la tabla ubdepartamento */
        function listar_combo_departamento(){
            $sql = "call SP_LISTAR_COMBO_DEPARTAMENTO";
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {
				while ($consulta_VU = mysqli_fetch_array($consulta)) {
                        $arreglo[] = $consulta_VU;
				}
				return $arreglo;
				$this->conexion->cerrar();
			}
        }
		/* PROVINCIA: Crea un array y lo retorna con los datos obtenidos de la base de datos de la tabla ubprovincia según el id del departamento */
        function listar_combo_provincia($iddepartamento){
            $sql = "call SP_LISTAR_COMBO_PROVINCIA('$iddepartamento')";
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {
				while ($consulta_VU = mysqli_fetch_array($consulta)) {
                        $arreglo[] = $consulta_VU;
				}
				return $arreglo;
				$this->conexion->cerrar();
			}
        }
		/* Distrito: Crea un array y lo retorna con los datos obtenidos de la base de datos de la tabla ubdistrito según el id de */
        function listar_combo_distrito($idprovincia){
            $sql = "call SP_LISTAR_COMBO_DISTRITO('$idprovincia')";
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {
				while ($consulta_VU = mysqli_fetch_array($consulta)) {
                        $arreglo[] = $consulta_VU;
				}
				return $arreglo;
				$this->conexion->cerrar();
			}
        }
    }
?>
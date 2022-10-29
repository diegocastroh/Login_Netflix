<?php
class UbigeoControlador{

    public function traedepa(){
        
        include_once("Models/Ubigeo.php");
        $MU = new Ubigeo(); /* Instancia de conexión */

        $consulta = $MU->listar_combo_departamento();
        echo json_encode($consulta);

    }
    public function traeprov(){
        
        include_once("Models/Ubigeo.php");
        $MU = new Ubigeo();
        $iddepartamento  = $_POST['iddepartamento'];
        $consulta = $MU->listar_combo_provincia($iddepartamento);
        echo json_encode($consulta);

    }
    public function traedist(){
        
        include_once("Models/Ubigeo.php");
        $MU = new Ubigeo();
        $idprovincia  = $_POST['idprovincia'];
        $consulta = $MU->listar_combo_distrito($idprovincia);
        echo json_encode($consulta);

    }


}
?>
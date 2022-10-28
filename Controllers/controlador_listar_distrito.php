<?php
    require '../Models/ubigeo.php';
    $MU = new Modelo_Ubigeo();
    $idprovincia  = $_POST['idprovincia'];
    $consulta = $MU->listar_combo_distrito($idprovincia);
    echo json_encode($consulta);
?>
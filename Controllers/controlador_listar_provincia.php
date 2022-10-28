<?php
    require '../Models/ubigeo.php';
    $MU = new Modelo_Ubigeo();
    $iddepartamento  = $_POST['iddepartamento'];
    $consulta = $MU->listar_combo_provincia($iddepartamento);
    echo json_encode($consulta);
?>
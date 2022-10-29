<?php

if(isset($_POST["funci"])){
    $contr=$_POST["contr"]."Controlador";$funci=$_POST['funci'];}
else{
    $contr = isset($_GET["c"]) ? $contr=$_GET['c']."Controlador" : $contr="UsuarioControlador";//otra forma de usar if
    if(isset($_GET["v"])){$funci=$_GET['v'];}else{$funci="acceso";}
}

/* incluimos el carchivo controlador y 
luego llamamos una funcion del controlador*/
include_once("Controllers/".$contr.".php");
$ini= new $contr();
$ini->$funci();

?>
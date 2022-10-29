<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login_styles.css">
</head>
<body>
    <nav class="navbar navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: white;" href="#">
            <img src="../img/Logo.png" alt="" width="30" height=auto class="d-inline-block align-text-top">
            DesCode
            </a>
        </div>
    </nav>
    <!-- Contenedor Usuarios -->
    <div class="m-0 row justify-content-center align-items-center" style="width: 100%; height: 90%">

        <h1 style="text-align: center; color:white">¿Quien eres?</h1>
        <!-- Instancia del conector -->
        <?php

            while($item = $users->fetch_assoc()){?>
                <!-- Usuario -->
                <div class="col-auto">
                    <!-- Estructura de un Item/Producto -->
                    <div class="card" style="width: 15rem; min-width: 250px; background: black; cursor: pointer">
                        <img src="img/perfil_icons/<?=$item['icono']?>" class="card-img-top" alt="...">
                        <input type="hidden" name="id" value = "<?=$item['id']?>">
                        <div class="card-body" style="text-align: center; color:white">
                            <h4 class="card-title" ><?=$item['usuario']?></h4>
                            <?php
                            $rol = $item['rol'];
                             if ($rol === "Administrador"){
                                $color = "#fe0000";
                            }else{
                                $color = "#51BCFF";
                            }
                            ?>
                            <p class="card-text texto-borde" style="color: <?php echo $color?>;"><?php echo $rol?></p>
                            <button href="?v=acceso&c=Usuario" class="btn btn-secondary" style="width: 100%">Iniciar Sesion</button>
                        </div>
                    </div>
                </div>
        <?php } ?>

        <!-- Botón de registro de usuario -->
        <div class="m-0 row justify-content-center">
            <a href="?v=registro&c=Usuario" class="link-light" style="width: 100%; text-align: center;">Registrarse</a>
        </div>

        <!-- dialog -->
        <dialog id="dialog">
                
        </dialog>
    </div>
</body>
</html>

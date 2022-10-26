<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login_styles.css">
    <link rel="stylesheet" href="css/registro_styles.css">
</head>
<body>
    <nav class="navbar navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: white;" href="#">
            <img src="img/Logo.png" alt="" width="30" height=auto class="d-inline-block align-text-top">
            DesCode
            </a>
        </div>
    </nav>
    <!-- Formulario -->
    <div class="m-0 row justify-content-center align-items-center " style="width: 100%; height: 90%">
        <!-- Clase form en registro_styles -->
        <div class="form" >
            <form class="row g-3">
                <!-- Correo/Email -->
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="correo@example.com">
                </div>
                <!-- Password -->
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
                <!-- Nombres -->
                <div class="col-md-6">
                    <label for="inputFirstName" class="form-label">Nombres</label>
                    <input type="firstname" class="form-control" id="inputFirstName">
                </div>
                <!-- Apellidos -->
                <div class="col-md-6">
                    <label for="inputLastName" class="form-label">Apellidos</label>
                    <input type="lastname" class="form-control" id="inputLastName">
                </div>
                <!-- Dirección 1 -->
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Calle 1234 Av.">
                </div>
                <!-- Dirección 2 -->
                <div class="col-6">
                    <label for="inputAddress2" class="form-label">Dirección 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Departamento, casa, o piso">
                </div>
                <!-- Distrito -->
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Distrito</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <!-- Ciudad -->
                <div class="col-md-3">
                    <label for="inputState" class="form-label">Ciudad</label>
                    <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                    </select>
                </div>
                <!-- Apartado teléfono -->
                <div class="col-md-3">
                    <label for="inputZip" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <!-- Imagen de Perfil -->
                <div class="col-md-4">
                    <label class="form-label">Foto de Perfil</label>
                    <img src="img/perfil_icons/image_1.jpeg" class="img-thumbnail" alt="...">
                </div>
                <!-- Contenedor (Contenido al lado de la Imagen de Perfil) -->
                <div class="col-md-8">
                    <div class="container">
                        <div class="row g-3">
                            <!-- Nombre de Usuario -->
                            <div class="col-md-4">
                                <label for="inputNick" class="form-label">Usuario</label>
                                <input type="text" class="form-control" id="inputNick" placeholder="Apodo">
                            </div>
                            <!-- Cajas -->
                            <div class="col-md-4">
                                <label for="inputState" class="form-label">Caja</label>
                                <select id="inputState" class="form-select">
                                    <option selected>General</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <!-- Roles -->
                            <div class="col-md-4">
                                <label for="inputState" class="form-label">Rol</label>
                                <select id="inputState" class="form-select">
                                <option selected>Administrador</option>
                                <option>...</option>
                                </select>
                            </div>
                        </div>
                        <!-- DNI/Pasaporte -->
                        <div class="row g-4" style="margin-top: auto">
                            <div class="col-md-12">
                                <label for="inputDNI" class="form-label">DNI/Pasaporte</label>
                                <input type="text" class="form-control" id="inputDNI" placeholder="Documento de Identidad">
                            </div>
                        </div>
                        <!-- Botón de registro e Inicio de Sesion -->
                        <div class="row g-0" style="margin-top: 25px; width: 100%">
                            <div class="col-6">
                                <button type="submit" class="btn btn-success">Iniciar Sesion</button>    
                            </div>
                            <div class="col-6" style="text-align:right;">
                                <button type="submit" class="btn btn-primary" >Registrarse</button>    
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <br>
        </div>
            
    </div>
    
</body>
</html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login_styles.css">
    <link rel="stylesheet" href="../css/registro_styles.css">
    
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
    <!-- Formulario -->
    <div class="m-0 row justify-content-center align-items-center " style="width: 100%; height: 90%">
        <h1 style="text-align: center; color:white; margin: 0">Registrate</h1>
        <!-- Clase form en registro_styles -->
        <div class="form">
            <form class="row g-3" style="padding-top: 5px; padding-bottom: 5px;">
                <!-- Correo/Email -->
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="correo@example.com" required>
                </div>
                <!-- Password -->
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="inputPassword4" required>
                </div>
                <!-- Nombres -->
                <div class="col-md-6">
                    <label for="inputFirstName" class="form-label">Nombres</label>
                    <input type="firstname" class="form-control" id="inputFirstName" required>
                </div>
                <!-- Apellidos -->
                <div class="col-md-6">
                    <label for="inputLastName" class="form-label">Apellidos</label>
                    <input type="lastname" class="form-control" id="inputLastName" required>
                </div>
                <!-- Dirección 1 -->
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Calle 1234 Av." required>
                </div>
                <!-- Dirección 2 -->
                <div class="col-6">
                    <label for="inputAddress2" class="form-label">Dirección 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Departamento, casa, o piso">
                </div>
                <!-- Distrito -->
                <div class="col-md-4">
                    <label for="inputDistrito" class="form-label">Distrito</label>
                    <select id="inputDistrito" class="js-example-basic-single" name="distrito" style="width: 100%">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <!-- Ciudad -->
                <div class="col-md-4">
                    <label for="inputProvincia" class="form-label">Provincia</label>
                    <select id="inputProvincia" class="js-example-basic-single" name="provincia" style="width: 100%">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <!-- Departamento -->
                <div class="col-md-4">
                    <label for="inputDepartamento" class="form-label">Departamento</label>
                    <select id="inputDepartamento" class="js-example-basic-single" name="departamento" style="width: 100%">
                    <option selected>Choose...</option>
                    <option>...</option>
                    </select>
                </div>
                <!-- Imagen de Perfil -->
                <div class="col-md-4">
                    <div style="justify-content: center; display: flex; align-items: center;">
                        <img src="../img/perfil_icons/image_1.jpeg" class="img-thumbnail" alt="...">
                    </div>
                </div>
                <!-- Contenedor (Contenido al lado de la Imagen de Perfil) -->
                <div class="col-md-8">
                    <div class="container">
                        <div class="row g-3">
                            <!-- Nombre de Usuario -->
                            <div class="col-md-4">
                                <label for="inputNick" class="form-label">Usuario</label>
                                <input type="text" class="form-control" id="inputNick" placeholder="Apodo" required>
                            </div>
                            <!-- Cajas -->
                            <div class="col-md-4">
                                <label for="inputCaja" class="form-label">Caja</label>
                                <select id="inputCaja" class="form-select">
                                    <option selected>General</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <!-- Roles -->
                            <div class="col-md-4">
                                <label for="inputRol" class="form-label">Rol</label>
                                <select id="inputRol" class="form-select">
                                    <option selected>Administrador</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <!-- DNI/Pasaporte -->
                        <div class="row g-4" style="margin-top: 0;">
                            <div class="col-md-6" >
                                <label for="inputDNI" class="form-label">DNI/Pasaporte</label>
                                <input type="text" class="form-control" id="inputDNI" placeholder="Documento de Identidad" required>
                            </div>
                            <!-- Apartado teléfono -->
                            <div class="col-md-6">
                                <label for="inputZip" class="form-label">Telefono</label>
                                <input type="text" class="form-control" id="inputZip" required>
                            </div>
                        </div>
                        <!-- Botón de registro e Inicio de Sesion -->
                        <div class="row g-0" style="padding-top: 1rem; width: 100%">
                            <div class="col-6">
                                <a href="../Views/login.php" type="submit" class="btn btn-success">Iniciar Sesion</a>    
                            </div>
                            <div class="col-6" style="text-align:right;">
                                <button type="submit" class="btn btn-primary" >Registrarse</button>    
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
            
    </div>
    
</body>
</html>
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>
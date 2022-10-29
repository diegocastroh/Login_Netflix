<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href=" css/login_styles.css">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>

<body>
    <nav class="navbar navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: white;" href="#">
                <img src=" img/Logo.png" alt="" width="30" height=auto class="d-inline-block align-text-top">
                DesCode
            </a>
        </div>
    </nav>
    <!-- Formulario -->
    <div class="m-0 row justify-content-center align-items-center " style="width: 100%; height: 90%">
        <h1 style="text-align: center; color:white; margin: 5px">Registrate</h1>
        <!-- Clase form en registro_styles -->
        <div class="form">
            <form method="post" action="?" class="row g-3" style="padding-top: 5px; padding-bottom: 5px;">
                <input type="hidden" name="contr" value="Usuario">
                <input type="hidden" name="funci" value="registro">
                <!-- Correo/Email -->
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Correo <span style="color:red">*</span> </label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="correo@example.com" required>
                </div>
                <!-- Password -->
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Contraseña <span style="color:red">*</span> </label>
                    <input type="password" class="form-control" id="inputPassword4" required>
                </div>
                <!-- Nombres -->
                <div class="col-md-6">
                    <label for="inputFirstName" class="form-label">Nombres <span style="color:red">*</span></label>
                    <input type="firstname" class="form-control" id="inputFirstName" required>
                </div>
                <!-- Apellidos -->
                <div class="col-md-6">
                    <label for="inputLastName" class="form-label">Apellidos <span style="color:red">*</span></label>
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
                    <label for="sel_departamento" class="form-label">Departamento</label>
                    <select id="sel_departamento" class="js-example-basic-single" name="distrito" style="width: 100%">
                    </select>
                </div>
                <!-- Ciudad -->
                <div class="col-md-4">
                    <label for="sel_provincia" class="form-label">Provincia</label>
                    <select id="sel_provincia" class="js-example-basic-single" name="provincia" style="width: 100%;">
                    </select>
                </div>
                <!-- Departamento -->
                <div class="col-md-4">
                    <label for="sel_distrito" class="form-label">Distrito</label>
                    <select id="sel_distrito" class="js-example-basic-single" name="departamento" style="width: 100%;">
                    </select>
                </div>

                <!-- Imagen de Perfil -->
                <div class="col-md-4">
                    <div class="container-select-image" style="justify-content: center; display: flex; align-items: center;">
                        <figure id="icon">
                            <img src=" img/perfil_icons/image_1.jpeg" class="img-thumbnail icon-select" style="border: 0; padding:0" alt="...">
                            <div class="capa">
                                <h6>Cambiar imagen de Perfil</h6>
                                <h1>+</h1>
                            </div>
                        </figure>
                    </div>
                </div>
                <!-- Contenedor (Contenido al lado de la Imagen de Perfil) -->
                <div class="col-md-8">
                    <div class="container">
                        <div class="row g-2">
                            <!-- Nombre de Usuario -->
                            <div class="col-md-4">
                                <label for="inputNick" class="form-label">Usuario <span style="color:red">*</span> </label>
                                <input type="text" class="form-control" id="inputNick" placeholder="Apodo" required>
                            </div>
                            <!-- Cajas -->
                            <div class="col-md-4">
                                <label for="inputCaja" class="form-label">Caja <span style="color:red">*</span> </label>
                                <select id="inputCaja" class="form-select">
                                    <option selected>General</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <!-- Roles -->
                            <div class="col-md-4">
                                <label for="inputRol" class="form-label">Rol <span style="color:red">*</span> </label>
                                <select id="inputRol" class="form-select">
                                    <option selected>Administrador</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <!-- DNI/Pasaporte -->
                        <div class="row g-4" style="margin-top: 0;">
                            <div class="col-md-6">
                                <label for="inputDNI" class="form-label">DNI/Pasaporte <span style="color:red">*</span> </label>
                                <input type="text" class="form-control" id="inputDNI" placeholder="Doc. de Identidad" required>
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
                                <a href="?v=acceso&c=Usuario" type="submit" class="btn btn-success">Iniciar Sesion</a>
                            </div>
                            <div class="col-6" style="text-align:right;">
                                <button type="submit" class="btn btn-primary">Registrarse</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <dialog id="dialog">
        <!-- Imagen de Perfil -->
        <div class="m-0 row justify-content-center align-items-center " id="contenedor_imagenes">
            <div class="row g-3">
                <div class="col-md-3">
                    <img src="img/perfil_icons/image_1.jpeg" class="img-thumbnail icon" style="border: 0; padding:0" alt="..." id="icon1">
                </div>
                <div class="col-md-3">
                    <img src="img/perfil_icons/image_2.jpeg" class="img-thumbnail icon" style="border: 0; padding:0" alt="..." id="icon2">
                </div>
                <div class="col-md-3">
                    <img src="img/perfil_icons/image_3.jpeg" class="img-thumbnail icon" style="border: 0; padding:0" alt="..." id="icon3">
                </div>
                <div class="col-md-3">
                    <img src="img/perfil_icons/image_4.jpeg" class="img-thumbnail icon" style="border: 0; padding:0" alt="..." id="icon4">
                </div>
            </div>
            <div class="row g-3" style="margin-top: auto">
                <div class="col-md-3">
                    <img src="img/perfil_icons/image_5.jpg" class="img-thumbnail icon" style="border: 0; padding:0" alt="..." id="icon5">
                </div>
                <div class="col-md-3">
                    <img src="img/perfil_icons/image_1.jpeg" class="img-thumbnail icon" style="border: 0; padding:0" alt="..." id="icon6">
                </div>
                <div class="col-md-3">
                    <img src="img/perfil_icons/image_2.jpeg" class="img-thumbnail icon" style="border: 0; padding:0" alt="..." id="icon7">
                </div>
                <div class="col-md-3">
                    <img src="img/perfil_icons/image_2.jpeg" class="img-thumbnail icon" style="border: 0; padding:0" alt="..." id="icon8">
                </div>
            </div>
            <div class="row" style="margin-top:0.7rem;">
                <form action="" method="dialog">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-danger" value="cancel">Cancelar</button>
                        <button class="btn btn-success" id="confirmBtn" value="default">Confirmar</button>
                    </div>
                </form>
            </div>
        </div>
    </dialog>

</body>

</html>
<!-- Scripts -->
<script src="Js/Ubigeo.js"></script>
<script src="Js/Modulo_Registro.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
        listar_departamento();
    });

    $("#sel_departamento").change(function() {
        var iddepartamento = $("#sel_departamento").val();
        listar_pronvincia(iddepartamento);
    })

    $("#sel_provincia").change(function() {
        var idprovincia = $("#sel_provincia").val();
        listar_distrito(idprovincia);
    })
</script>
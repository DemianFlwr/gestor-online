<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro | My Folder Online</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/adjunto-archivo.png">
    <link rel="stylesheet" href="./assets/css/login.css">
</head>

<body>
    <div class="main-login">
        <div class="left-log">
            <h1>Crea una cuenta para<br> MyFolderOnline !</h1>
            <img src="./assets/img/forms-animate.svg" class="reg-img" alt="folder-online">
        </div>
        <div class="right-log">
            <div class="card-log">
                <h1>Registro de Usuarios</h1>
                <p>MyFolderOnline</p>
                <div class="textfield">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" placeholder="Nombre...">
                </div>

                <div class="textfield">
                    <label for="nacimiento">Fecha de nacimiento:</label>
                    <input type="text" name="nacimiento" placeholder="Nacimiento...">
                </div>

                <div class="textfield">
                    <label for="email">Correo electronico:</label>
                    <input type="text" name="email" placeholder="Correo...">
                </div>

                <div class="textfield">
                    <label for="usuario">Usuario:</label>
                    <input type="text" name="usuario" placeholder="Usuario...">
                </div>

                <div class="textfield">
                    <label for="pass">Contraseña:</label>
                    <input type="password" name="pass" placeholder="Contraseña...">
                </div>

                <button class="btn-log">Regístrate 🌸</button>
                <!-- Cambiar direccion de enlace a "index.php" -->
                <a class="link-reg" href="./vistas/header.php">Volver a Inicio 🌸</a>

            </div>
        </div>
    </div>
    <script src="./assets/librerias/sweetalert.min.js"></script>
</body>

</html>
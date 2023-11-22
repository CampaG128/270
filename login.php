<?php

    include("db.php");

    if(isset($_REQUEST['login'])){
        ?>
            <script>
                alert("Los datos ingresados no coinciden con ninguno de nuestros perfiles de administrador");
            </script>
        <?php
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <title>Cbtis 128</title>
</head>

    <style>

        .logo_img{
            width: 20%;
        }

        .body{
            margin: 0px;
            background-color: #DCEFFF;
            overflow: hidden;
        }

        .nav{
            position: static;
            background-color: #04457D;
            height: 7.5%;
            width: 100%;
            display: flex;
            justify-content: space-evenly;
            padding: 1% 0px;
            font-family: monospace; 
        }

        .logo{
            text-decoration: none;
            color: white;
            font-family: monospace; 
        }

        .logo:hover{
            color: white;
        }

        .ocultar{
            opacity: 0;
            pointer-events: none;
        }

        .contenedor{
            min-width: 200%;
            max-width: 200%;
            min-height: 86.5%;
            max-height: 86.5%;
            position: fixed;
            background-color: #DCEFFF;
            display: flex;
            transition: .4s;
            font-family: monospace; 

        }

        .footer{
            background-color: #04457D;
            height: 7.5%;
            width: 100%;
            display: flex;
            justify-content: center;
            padding: 1% 0px;
            margin-top: 19.5%;
        }

    </style>

<body class="body">
    
    <div class="nav">
        <a href="index.php" class="logo"><img src="logo.png" class="logo_img" alt=""></a>
        <a href="#" class="logo ocultar">Admnistrador</a>
    </div>

    <div class="card-body">
        <form class="row g-3" action="comprobar.php" method="POST">
            <div class="col-md-12">
                <label class="form-label h1">Ingresa los siguientes datos para inciar sesión como administrador</label>
            </div>

            <div class="col-md-6">
                <label class="form-label">Nombre administrador</label>
                <input type="text" name="nom_admin" class="form-control" placeholder="Nombre administrador" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Nombre de usario administrador</label>
                <input type="text" name="nom_usuario" class="form-control" placeholder="Nombre de usario administrador" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Correo electronico</label>
                <input type="text" name="correo" class="form-control" placeholder="Correo electronico" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Contaseña</label>
                <input type="text" name="contra" class="form-control" placeholder="Contaseña" required>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary" name="registrar"><i class="fa fa-plus"></i><span class="ms-2">Iniciar sesión</span></button>
            </div>
        </form>
    </div>

    <div class="footer">
        <a class="logo">Cbtis 270, Cd. Juarez, Chihuahua</a>
    </div>

</body>
</html>
<?php

    include("db.php");

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
        }

    </style>

<body class="body">
    
    <div class="nav">
        <a href="index.php" class="logo"><img src="logo.png" class="logo_img" alt=""></a>
        <a href="#" class="logo ocultar">Admnistrador</a>
    </div>

    <div class="card-body">
                <form class="row g-3" action="subir_ficha.php" method="POST">

                    <div class="col-md-12">
                        <label class="form-label h1">Datos del alumno</label>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Curp</label>
                        <input maxlength="18" type="text" name="curp" class="form-control" placeholder="Curp del alumno" required>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Nombre del alumno</label>
                        <input type="text" name="nombre_alumno" class="form-control" placeholder="Nombre del alumno" required>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Apellido paterno</label>
                        <input type="text" name="appat_alumno" class="form-control" placeholder="Apellido paterno" required>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Apellido materno</label>
                        <input type="text" name="apmat_alumno" class="form-control" placeholder="Apellido materno" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Fecha de nacimiento</label>
                        <input type="date" name="fecha_nac" class="form-control" placeholder="Fecha de nacimiento" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Número de telefono</label>
                        <input type="text" name="tel_alumno" class="form-control" placeholder="Número de telefono" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Correo electronico</label>
                        <input type="email" name="correo" class="form-control" placeholder="Correo electronico" required>
                    </div>
                    
                    <div class="col-md-6">
                        <label class="form-label">Nombre del padre</label>
                        <input type="text" name="nom_padre" class="form-control" placeholder="Nombre del padre" required>
                    </div>
                    
                    <div class="col-md-12">
                        <label class="form-label">Nombre de la madre</label>
                        <input type="text" name="nom_madre" class="form-control" placeholder="Nombre de la madre" required>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label h1">Datos del tutor</label>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Nombre del tutor</label>
                        <input type="text" name="tutor" class="form-control" placeholder="Nombre del tutor" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Ocupacion del tutor</label>
                        <input type="text" name="ocupacion" class="form-control" placeholder="Ocupacion del tutor" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Fecha de nacimiento del tutor</label>
                        <input type="date" name="nac_tutor" class="form-control" placeholder="Fecha de nacimiento del tutor" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Número de telefono del tutor</label>
                        <input type="text" name="tel_tutor" class="form-control" placeholder="Número de telefono del tutor" required>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">CURP del tutor</label>
                        <input maxlength="18" type="text" name="curp_tutor" class="form-control" placeholder="CURP del tutor" required>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label h1">Datos de domicilio</label>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Dirección de domicilio</label>
                        <input type="text" name="domicilio" class="form-control" placeholder="Dirección de domicilio" required>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">País de nacimiento</label>
                        <input type="text" name="pais_nac" class="form-control" placeholder="País de nacimiento" required>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Estado de nacimiento</label>
                        <input type="text" name="estado_nac" class="form-control" placeholder="Estado de nacimiento" required>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Municipio de nacimiento</label>
                        <input type="text" name="municipio_nac" class="form-control" placeholder="Municipio de nacimiento" required>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label h1">Datos de salud</label>
                    </div>

                    <div class="col-md-8">
                        <label class="form-label">Número de seguro social</label>
                        <input maxlength="11" type="text" name="num_ss" class="form-control" placeholder="Número de seguro social" required>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Tipo de sangre</label>
                        <select class="form-select" name="sangre" aria-label="Default select example">
                            <option value="A+">A+</option>
                            <option value="O+">O+</option>
                            <option value="B+">B+</option>
                            <option value="AB+">AB+</option>
                            <option value="A-">A-</option>
                            <option value="O-">O-</option>
                            <option value="B-">B-</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label h1">Datos escolares</label>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Carrera tecnica a escoger (primera opción)</label>
                        <select class="form-select" name="carrera1" aria-label="Default select example">
                            <option value="mantenimiento industrial">Mantenimiento industrial</option>
                            <option value="electricidad">Electricidad</option>
                            <option value="programacion">Programación</option>
                            <option value="administracion de recursos humanos">Administración de recursos humanos</option>
                            <option value="logistica">Logística</option>
                            <option value="fuentes alternas de energia">Fuentes alternas de energía</option> 
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Carrera tecnica a escoger (segunda opción)</label>
                        <select class="form-select" name="carrera2" aria-label="Default select example">
                            <option value="mantenimiento industrial">Mantenimiento industrial</option>
                            <option value="electricidad">Electricidad</option>
                            <option value="programacion">Programación</option>
                            <option value="administracion de recursos humanos">Administración de recursos humanos</option>
                            <option value="logistica">Logística</option>
                            <option value="fuentes alternas de energia">Fuentes alternas de energía</option> 
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Carrera tecnica a escoger (tercera opción)</label>
                        <select class="form-select" name="carrera3" aria-label="Default select example">
                            <option value="mantenimiento industrial">Mantenimiento industrial</option>
                            <option value="electricidad">Electricidad</option>
                            <option value="programacion">Programación</option>
                            <option value="administracion de recursos humanos">Administración de recursos humanos</option>
                            <option value="logistica">Logística</option>
                            <option value="fuentes alternas de energia">Fuentes alternas de energía</option> 
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Nombre de la anterior secundaria</label>
                        <input type="text" name="secundaria" class="form-control" placeholder="Nombre de la anterior secundaria" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Calificación promedio de la secundaria</label>
                        <input type="text" name="calificacion" class="form-control" placeholder="Calificación promedio de la secundaria" required>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="registrar"><i class="fa fa-plus"></i><span class="ms-2">Registrar datos de ficha</span></button>
                    </div>
                </form>
            </div>

    <div class="footer">
        <a class="logo">Cbtis 270, Cd. Juarez, Chihuahua</a>
    </div>

</body>
</html>
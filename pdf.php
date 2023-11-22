<?php

    include("db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <title>Cbtis 128</title>
</head>

    <style>

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
            margin-top: 5%;
        }

        .volver{
            text-decoration: none;
            color: #04457D;
            font-size: 2em;
            padding: 2% 4%;
            margin: 40% 15%;
            border: 1px solid #04457D;
            transition: .5s;
        }
        .volver:hover{
            background-color: white;
        }

        .logo_img{
            width: 20%;
        }

    </style>

<body class="body">
    
    <div class="nav">
        <a href="index.php" class="logo"><img src="logo.png" class="logo_img" alt=""></a>
        <a href="#" class="logo ocultar">Admnistrador</a>
    </div>

    <?php
    
        $id = $_REQUEST['id'];
        $sentencia = "SELECT * FROM alumno,domicilio,escolares,salud,tutor WHERE alumno.num_folio = '$id' AND domicilio.num_folio = '$id' AND escolares.num_folio = '$id' AND salud.num_folio = '$id' AND tutor.num_folio = '$id'";
        $consultar = $db->query($sentencia);
        while($imprimir = $consultar->fetch_assoc()){

    ?>

            <div class="card-body">
                <form class="row g-3" id="datos" action="" method="POST">

                    <div class="col-md-12">
                        <label class="form-label h1">Datos del alumno</label>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Curp</label>
                        <input maxlength="18" type="text" disabled value="<?php echo $imprimir['curp']?>" name="curp" class="form-control" placeholder="Curp del alumno" required>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Nombre del alumno</label>
                        <input type="text" disabled name="nombre_alumno" value="<?php echo $imprimir['nombre_alumno']?>" class="form-control" placeholder="Nombre del alumno" required>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Apellido paterno</label>
                        <input type="text" disabled name="appat_alumno" value="<?php echo $imprimir['apellido_paterno']?>" class="form-control" placeholder="Apellido paterno" required>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Apellido materno</label>
                        <input type="text" disabled name="apmat_alumno" value="<?php echo $imprimir['apellido_materno']?>" class="form-control" placeholder="Apellido materno" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Fecha de nacimiento</label>
                        <input type="date" disabled name="fecha_nac" value="<?php echo $imprimir['nacimiento_alumno']?>" class="form-control" placeholder="Fecha de nacimiento" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Número de telefono</label>
                        <input type="text" disabled name="tel_alumno" value="<?php echo $imprimir['telefono']?>" class="form-control" placeholder="Número de telefono" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Correo electronico</label>
                        <input type="email" disabled name="correo" value="<?php echo $imprimir['correo']?>" class="form-control" placeholder="Correo electronico" required>
                    </div>
                    
                    <div class="col-md-6">
                        <label class="form-label">Nombre del padre</label>
                        <input type="text" disabled name="nom_padre" value="<?php echo $imprimir['nombre_padre']?>" class="form-control" placeholder="Nombre del padre" required>
                    </div>
                    
                    <div class="col-md-12">
                        <label class="form-label">Nombre de la madre</label>
                        <input type="text" disabled name="nom_madre" value="<?php echo $imprimir['nombre_madre']?>" class="form-control" placeholder="Nombre de la madre" required>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label h1">Datos del tutor</label>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Nombre del tutor</label>
                        <input type="text" disabled name="tutor" value="<?php echo $imprimir['tutor']?>" class="form-control" placeholder="Nombre del tutor" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Ocupacion del tutor</label>
                        <input type="text" disabled name="ocupacion" value="<?php echo $imprimir['ocupacion_tutor']?>" class="form-control" placeholder="Ocupacion del tutor" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Fecha de nacimiento del tutor</label>
                        <input type="date" disabled name="nac_tutor" value="<?php echo $imprimir['nac_tutor']?>" class="form-control" placeholder="Fecha de nacimiento del tutor" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Número de telefono del tutor</label>
                        <input type="text" disabled name="tel_tutor" value="<?php echo $imprimir['telefono_tutor']?>" class="form-control" placeholder="Número de telefono del tutor" required>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">CURP del tutor</label>
                        <input maxlength="18" type="text" disabled value="<?php echo $imprimir['curp_tutor']?>" name="curp_tutor" class="form-control" placeholder="CURP del tutor" required>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label h1">Datos de domicilio</label>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Dirección de domicilio</label>
                        <input type="text" disabled name="domicilio" value="<?php echo $imprimir['domicilio']?>" class="form-control" placeholder="Dirección de domicilio" required>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">País de nacimiento</label>
                        <input type="text" disabled name="pais_nac" value="<?php echo $imprimir['pais_nac']?>" class="form-control" placeholder="País de nacimiento" required>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Estado de nacimiento</label>
                        <input type="text" disabled name="estado_nac" value="<?php echo $imprimir['estado_nac']?>" class="form-control" placeholder="Estado de nacimiento" required>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Municipio de nacimiento</label>
                        <input type="text" disabled name="municipio_nac" value="<?php echo $imprimir['municipio_nac']?>" class="form-control" placeholder="Municipio de nacimiento" required>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label h1">Datos de salud</label>
                    </div>

                    <div class="col-md-8">
                        <label class="form-label">Número de seguro social</label>
                        <input maxlength="11" type="text" disabled name="num_ss" value="<?php echo $imprimir['seguro_social']?>" class="form-control" placeholder="Número de seguro social" required>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Tipo de sangre</label>
                        <select class="form-select" disabled name="sangre" value="<?php echo $imprimir['tipo_sangre']?>" aria-label="Default select example">
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
                        <select class="form-select" disabled name="carrera1" value="<?php echo $imprimir['carrera1']?>" aria-label="Default select example">
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
                        <select class="form-select" disabled name="carrera2" value="<?php echo $imprimir['carrera2']?>" aria-label="Default select example">
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
                        <select class="form-select" disabled name="carrera3" value="<?php echo $imprimir['carrera3']?>" aria-label="Default select example">
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
                        <input type="text" disabled name="secundaria" value="<?php echo $imprimir['secundaria']?>" class="form-control" placeholder="Nombre de la anterior secundaria" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Calificación promedio de la secundaria</label>
                        <input type="text" disabled name="calificacion" value="<?php echo $imprimir['calificacion']?>" class="form-control" placeholder="Calificación promedio de la secundaria" required>
                    </div>
                </form>
            </div>
            <br><br><br>
            <a href="consulta.php?curp=<?php echo $imprimir['curp']?>" class="volver">Volver atras</a>

        <?php
        ?>

        <script>

            const datos = document.getElementById('datos');

            window.addEventListener('load', () => {
                html2pdf().from(datos).save();
            })
            

        </script>

        <?php
        }   
        
        ?>

    <div class="footer">
        <a class="logo">Cbtis 270, Cd. Juarez, Chihuahua</a>
    </div>



</body>
</html>
<?php 

include("db.php"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
            width: 100%;
            display: flex;
            justify-content: space-evenly;
            padding: 1% 0px;
            font-family: monospace; 
        }

        .ocultar{
            opacity: 0;
            pointer-events: none;
        }

        .logo{
            text-decoration: none;
            color: white;
            font-family: monospace; 
        }

        .logo:hover{
            color: white;
        }

        .contenedor{
            min-width: 100%;
            max-width: 100%;
            min-height: 86.5%;
            max-height: 86.5%;
            position: fixed;
            background-color: #DCEFFF;
            display: flex;
            transition: .4s;
            font-family: monospace; 
            overflow: auto;
        }

        .div1{
            margin-left: 1.5%;
            margin-top: 2%;
            position: absolute;
            border: 1px solid #04457D;
            min-width: 95%;
            max-width: 95%;
            min-height: 90%;
            padding: 1% 1%;
        }

        .div2{
            margin-left: 1.5%;
            margin-top: 1%;
            position: absolute;
            border: 1px solid #04457D;
            min-width: 95%;
            max-width: 95%;
            min-height: 10%;
            padding: 1% 1%;
            display: flex;
            justify-content: space-evenly;
        }

        .footer{
            background-color: #04457D;
            height: 7.5%;
            width: 100%;
            display: flex;
            justify-content: center;
            padding: 1.5% 0px;
            margin-top: 40%;
        }

        .tabla{
            border-collapse: collapse;
            border: 1px solid #04457D;
            min-width: 100%;
        }

        .celda{
            border: 1px solid #04457D;
            text-align: center;
            padding: 2% 0%;
            overflow: auto;
        }

        .celda_grande{
            border: 1px solid #04457D;
            text-align: center;
            padding: 2% 0%;
            margin: 0px 1%;
            overflow: auto;
        }

        .titulo{
            border: 1px solid #04457D;
            text-align: center;
            padding: 1%;
            font-size: 1.1em;
            color: #04457D;
        }

        .imprimir{
            border: 1px solid #04457D;
            padding: 2% 4%;
            margin: 17% 40%;
            position: absolute;
            text-decoration: none;
            color: #04457D;
            transition: .5s;
        }

        .imprimir:hover{
            background-color: #04457D;
            border: 1px solid #04457D;
            color: #DCEFFF;
        }

    </style>

<body class="body">
    
    <div class="nav">
        <a href="index.php" class="logo"><img src="logo.png" class="logo_img" alt=""></a>
        <a href="admin.php" class="logo ocultar">Cerrar sesión</a>
    </div>

    <div class="contenedor" id="cont">
        <div class="div1">
            <table class="tabla">
                <thead>
                    <tr>
                        <th class="titulo">CURP</th>
                        <th class="titulo">Aspirante</th>
                        <th class="titulo">Correo</th>
                        <th class="titulo">Telefono</th>
                        <th class="titulo">Carrera -- primera prioridad</th>
                        <th class="titulo">Carrera -- segunda prioridad</th>
                        <th class="titulo">Carrera -- tercera prioridad</th>
                        <th class="titulo">Promedio de secundaria</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $curp = $_REQUEST['curp'];
                        $sentencia = "SELECT * FROM alumno,escolares WHERE alumno.curp = '$curp' AND alumno.num_folio = escolares.num_folio";
                        $consultar = $db->query($sentencia);
                        while ($imprimir = $consultar->fetch_assoc()) {
                        ?>
                            <tr>
                                <td class="celda_grande"><?php echo $imprimir['curp']; ?></td>
                                <td class="celda_grande"><?php echo $imprimir['nombre_alumno']." ".$imprimir['apellido_paterno']." ".$imprimir['apellido_materno']; ?></td>
                                <td class="celda_grande"><?php echo $imprimir['correo']; ?></td>
                                <td class="celda"><?php echo $imprimir['telefono']; ?></td>
                                <td class="celda"><?php echo $imprimir['carrera1']; ?></td>
                                <td class="celda"><?php echo $imprimir['carrera2']; ?></td>
                                <td class="celda"><?php echo $imprimir['carrera3']; ?></td>
                                <td class="celda"><?php echo $imprimir['calificacion']; ?></td>
                                <a href="pdf.php?id=<?php echo $imprimir['num_folio']; ?>" class="imprimir">Imprimir ficha</a>
                            </tr>
                        <?php
                        };
                    ?>
                </tbody>
            </table>
        </div>
    
    </div>

    <div class="footer">
        <a class="logo">Cbtis 270, Cd. Juarez, Chihuahua</a>
    </div>

</body>

<script>

</script>

</html>
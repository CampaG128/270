<?php



    if(isset($_REQUEST['registro'])){

        $registro = $_REQUEST['registro'];
        
        if($registro == 1) {
            ?>
                <script>
                    alert("Tu ficha ha sido registrada correctamente, mantente atento al correo electronico registrado para mas información");
                </script>
            <?php
        } else if ($registro == 0) {
            ?>
                <script>
                    alert("Ha ocurrido un error, tal vez debas probar tu conexióna internet o buscar ayuda en nuestro plantel presencialmente");
                </script>
            <?php
        }

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <title>Cbtis 128</title>
</head>

    <style>
        
        .logo_img{
            width: 20%;
        }

        .body{
            margin: 0px;
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

        .logo{
            text-decoration: none;
            color: white;
            font-family: monospace; 
            display: flex;
            align-items: center;
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

        .div1{
            margin-left: 11.5%;
            margin-top: 3%;
            position: absolute;
            border: 1px solid #04457D;
            min-width: 25%;
            max-width: 25%;
            min-height: 50%;
            max-height: 50%;
            display: grid;
            align-content: center;
            padding: 1% 1%;
        }

        .div2{
            margin-left: 61.5%;
            margin-top: 3%;
            position: absolute;
            border: 1px solid #04457D;
            min-width: 25%;
            max-width: 25%;
            min-height: 50%;
            max-height: 50%;
            display: grid;
            align-items: center;
            padding: 1% 1%;
        }

        .mover{
            transform: translateX(-50%);
        }

        .footer{
            background-color: #04457D;
            height: 7.5%;
            width: 100%;
            display: flex;
            justify-content: center;
            padding: 1% 0px;
            margin-top: 41%;
        }

        .titulo{
            font-size: 2em;
            color: #04457D;
            text-align: center;
            padding: 1% 0px;
        }
        
        .texto{
            font-size: 1.2em;
            color: #04457D;
            text-align: center;
            padding: 1% 0px;

        }
        
        .btn{
            font-size: 1.2em;
            color: #04457D;
            text-align: center;
            margin: 2% 0px;
            padding: 1.5% 0px;
            border: 1px solid #04457D;
            width: 50%;
            margin-left: 25%;
            transition: .5s;
            text-decoration: none;
        }

        .btn:hover{
            background-color: #04457D;
            color: #DCEFFF;
            border: 1px solid #04457D;
        }

        .cuadro_titulo{
            text-align: center;
            font-size: 2em;
            color: #04457D;
            padding: 1% 0px 6% 0px;
            font-family: monospace;
        }

        .cuadro_opcioes{
            text-align: center;
            font-size: 1.3em;
            background-color: #04457D;
            color: white;
            padding: 1% 0px;
        }

        .opcion_crear{
            width: 40%;
            padding: 12.7% 0px; 
            position: absolute;
            border: 1px solid #04457D;
        }

        .crear{
            font-size: 1.2em;
            color: #04457D;
            text-decoration: none;
            border: 1px solid #04457D;
            padding: 1% 2%;
            margin-left: 25%;
            transition: .5s;
        }

        .crear:hover{
            border: 1px solid #04457D;
            color: #DCEFFF;
            background-color: #04457D;
        }

        .opcion_consultar{
            width: 50%;
            padding: 8% 0px; 
            position: relative;
            margin-left: 50%;
            border: 1px solid #04457D;
        }

        .form{
            display: grid;
            justify-content: center;
        }

        .text{
            margin: 0% 0px 6% 0px;
            color: #04457D;
        }

        .input{
            margin: 0% 0px 6% 0px;
        }

        .submit{
            color: #04457D;
            padding: 2% 0px;
            background-color: #DCEFFF;
            border: 1px solid #04457D;
        }

        .logo:hover{
            color: white;
        }

    </style>

<body class="body">
    
    <div class="nav">
        <a href="index.php" class="logo"><img src="logo.png" class="logo_img" alt=""></a>
        <a href="admin.php?num=1" class="logo">Admnistrador</a>
    </div>

    <div class="contenedor" id="cont">
    
        <div class="div1">
            <div class="titulo">Bienvenido a tierra de toros</div>
            <div class="texto">En esta página oficial del cbtis 270 podras crear o consultar tus propias fichas de admisón</div>
            <a href="#" class="btn" id="btn">Procesos</a>
        </div>
    
        <div class="div2">
            <div class="cuadro_titulo">Selecciona lo que quieras hacer</div>
            <div class="cuadro_opciones">
                <div class="opcion_crear">
                    <a href="crear.php" class="crear">Crea una ficha</a>
                </div>  
                <div class="opcion_consultar">
                    <form action="consulta.php" class="form">
                        <label for="" class="text">Ingresa tu curp para buscar tu ficha</label>
                        <input type="text" maxlength="18" class="input" name="curp">
                        <input type="submit" class="submit" value="Buscar ficha">
                    </form>                    
                </div>
            </div>
        </div>
    
    </div>

    <div class="footer">
        <a class="logo">Cbtis 270, Cd. Juarez, Chihuahua</a>
    </div>

</body>

<script>

    const btn = document.getElementById('btn');
    const volver = document.getElementById('logo');
    const cont = document.getElementById('cont');

    btn.addEventListener('click', () => {
        cont.classList.add('mover');
    });

    volver.addEventListener('click', () => {
        cont.classList.remove('mover');
    });

</script>

</html>
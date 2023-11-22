<?php

if(isset($_POST['registrar'])){

    include("db.php");

// ---- Datos de alumno
    $curp = $_POST['curp'];
    $nombre = $_POST['nombre_alumno'];
    $appat = $_POST['appat_alumno'];
    $apmat = $_POST['apmat_alumno'];
    $nac = $_POST['fecha_nac'];
    $tel = $_POST['tel_alumno'];
    $padre = $_POST['nom_padre'];
    $madre = $_POST['nom_madre'];
    $correo = $_POST['correo'];
// -----------------------------------------
// ---- Datos del tutor
    $tutor = $_POST['tutor'];
    $ocupacion = $_POST['ocupacion'];
    $nac_tutor = $_POST['nac_tutor'];
    $tel_tutor = $_POST['tel_tutor'];
    $curp_tutor = $_POST['curp_tutor'];
// -----------------------------------------
// ---- Datos del domicilio
    $domicilio = $_POST['domicilio'];
    $pais = $_POST['pais_nac'];
    $estado = $_POST['estado_nac'];
    $municipio = $_POST['municipio_nac'];
// -----------------------------------------
// ---- Datos de salud
    $ss = $_POST['num_ss'];
    $sangre = $_POST['sangre'];
// -----------------------------------------
// ---- Datos escolares
    $carrera1 = $_POST['carrera1'];
    $carrera2 = $_POST['carrera2'];
    $carrera3 = $_POST['carrera3'];
    $secundaria = $_POST['secundaria'];
    $calificacion = $_POST['calificacion'];
// -----------------------------------------

    $sentencia_alumno = "INSERT INTO alumno (curp, nombre_alumno, apellido_paterno, apellido_materno, nacimiento_alumno, telefono, nombre_padre, nombre_madre, correo) VALUES ('$curp','$nombre','$appat','$apmat','$nac','$tel','$padre','$madre','$correo')";
    $sentencia_tutor = "INSERT INTO tutor (tutor, ocupacion_tutor, nac_tutor, telefono_tutor, curp_tutor) VALUES ('$tutor','$ocupacion','$nac_tutor','$tel_tutor','$curp_tutor')";
    $sentencia_domicilio = "INSERT INTO domicilio (domicilio, pais_nac, estado_nac, municipio_nac) VALUES ('$domicilio','$pais','$estado','$municipio')";
    $sentencia_salud = "INSERT INTO salud (seguro_social, tipo_sangre) VALUES ('$ss','$sangre')";
    $sentencia_escolares = "INSERT INTO escolares (carrera1, carrera2, carrera3, secundaria, calificacion) VALUES ('$carrera1','$carrera2','$carrera3','$secundaria','$calificacion')";

    $consultar_alumno  = $db->query($sentencia_alumno);
    $consultar_tutor  = $db->query($sentencia_tutor);
    $consultar_domicilio = $db->query($sentencia_domicilio);
    $consultar_salud  = $db->query($sentencia_salud);
    $consultar_escolares  = $db->query($sentencia_escolares);

    if($consultar_alumno && $consultar_tutor && $consultar_domicilio && $consultar_salud && $consultar_escolares){
        header("location: index.php?registro=1");
    } else {
        header("location: index.php?registro=0");
    }

}

?>
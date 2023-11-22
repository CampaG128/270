<?php

$admin = $_POST['nom_admin'];
$usuario = $_POST['nom_usuario'];
$correo = $_POST['correo'];
$contra = $_POST['contra'];

if($admin == "Grecia Arely Gonzalez Barraza" && $usuario == "Barraza_09" && $correo == "greciabarraza@gmail.com" && $contra == "Grecita123"){
    session_start();
    $_SESSION['admin'] = $admin;
    header("location: admin.php?num=1");
} else {
    header("location: login.php?login=0");
}

?>
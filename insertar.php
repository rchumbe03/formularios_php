<?php
require 'bd_conect.php';
try {

    if (empty($_POST['nombre']) || empty($_POST['clave']) || empty($_POST['rol'])) {
        header('Location: form_insertar.php?error=1');
        exit();
    }

    $ins = "INSERT INTO usuarios (nombre, clave, rol) VALUES (:nombre, :clave, :rol)";
    $stmt = $bd->prepare($ins);

    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':clave', $_POST['clave']);
    $stmt->bindParam(':rol', $_POST['rol']);

    $resul = $stmt->execute();

    if($resul) {
        header('Location: form_insertar.php');
    } else {
        print_r($stmt -> errorinfo());
    }    
} catch (PDOException $e) {
    echo 'Error con la base de datos: ' . $e->getMessage();
}
?>
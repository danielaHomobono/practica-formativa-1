<?php

// recibe datos del frontend por POST y verifica que estén completos

header('Content-Type: application/json');

// Por ejemplo: esperamos los campos 'nombre' y 'email'
$nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';

//  Incluimos una verificación básica
if ($nombre !== '' && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['status' => 'ok']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Datos inválidos']);
}
?>

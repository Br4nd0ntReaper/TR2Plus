<?php
$conn = mysqli_connect("localhost", "root", "", "prueba");

if (!$conn) {
    die("Conexión a la base de datos fallida: " . mysqli_connect_error());
}

$nombres = $_POST['Nombres'];
$apellidos = $_POST['Apellidos'];
$correo = $_POST['Correo'];
$clave = $_POST['Clave'];

$sql = "INSERT INTO login (Nombres, Apellidos, Correo, Clave) VALUES ('$nombres', '$apellidos', '$correo', '$clave')";

if (mysqli_query($conn, $sql)) {
    echo "Registro exitoso. ¡Bienvenido!";
    header("Location: login.php");
} else {
    echo "Error en el registro: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

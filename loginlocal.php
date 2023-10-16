<?php

use Beta\Microsoft\Graph\Model\Location;

$conn = mysqli_connect("localhost", "root", "", "prueba");

$correo = $_POST['Correo'];
$password = $_POST['Clave'];

$query = "SELECT * FROM login WHERE Correo= '$correo' and Clave='$password'";

$result = mysqli_query($conn, $query);
$cont = mysqli_num_rows($result);
if ($cont == 1) {
    header("Location: index.html");
} else {
    echo "usuario no encontrado";
}


?>
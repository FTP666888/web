<?php
require_once 'conn.php';

$conexion = connectDB();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["uname"];
    $contrasena = $_POST["pswd"];

    $consulta = "SELECT id FROM usuarios WHERE username = '$usuario' AND passwd = '$contrasena'";
    $resultado = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($resultado) == 1) {
        $_SESSION["usuario"] = $usuario;
        header("Location: ../content/carreras.php");
    } else {
        echo "<script>
        alert('Usuario o contraseña incorrectos');
        window.location.href = '../index.php';
        </script>";
    }
}

mysqli_close($conexion);
?>

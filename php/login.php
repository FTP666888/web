<?php
require_once 'conn.php'; // Corrige la inclusión del archivo

// Conecta a la base de datos (utiliza tu función conectarBaseDeDatos())
$conexion = connectDB();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["uname"];
    $contrasena = $_POST["pswd"];

    // Consulta para verificar si el usuario y la contraseña coinciden
    $consulta = "SELECT id FROM usuarios WHERE username = '$usuario' AND passwd = '$contrasena'";
    $resultado = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($resultado) == 1) {
        // Usuario autenticado correctamente
        $_SESSION["usuario"] = $usuario; // Guarda el nombre de usuario en la sesión
        header("Location: dashboard.php"); // Redirige a la página protegida
    } else {
        echo "<script>
        alert('Usuario o contraseña incorrectos');
        window.location.href = '../index.php';
        </script>";
    }
}

// Cierra la conexión a la base de datos
mysqli_close($conexion);
?>

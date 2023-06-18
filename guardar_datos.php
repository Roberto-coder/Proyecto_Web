<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Recuperar los datos del formulario
  $nombres = $_POST['nombres'];
  $correo = $_POST['correo'];
  $telefonico = $_POST['telefonico'];
  $sitio_web = $_POST['sitio_web'];
  $asunto = $_POST['asunto'];
  $mensaje = $_POST['mensaje'];

  // Conexión a la base de datos
  $servername = "localhost";
  $username = "tu_usuario";
  $password = "tu_contraseña";
  $dbname = "login";

  $conn = new mysqli('localhost', 'root', '' , 'login');

  // Verificar la conexión
  if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
  }

  // Insertar los datos en la base de datos
  $sql = "INSERT INTO tabla_datos (nombres, correo, telefonico, sitio_web, asunto, mensaje) 
          VALUES ('$nombres', '$correo', '$telefonico', '$sitio_web', '$asunto', '$mensaje')";

  if ($conn->query($sql) === TRUE) {
    // Mostrar mensaje en la página principal
    echo '<script>alert("Datos guardados correctamente");</script>';
  } else {
    // Mostrar mensaje de error en la página principal
    echo '<script>alert("Error al guardar los datos: ' . $conn->error . '");</script>';
  }

  $conn->close();

  // Recargar la página principal
  echo '<script>window.location.href = "contact.php";</script>';
}
?>

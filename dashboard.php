<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.html');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><title>Área Privada</title></head>
<body>
    <h1>Bem-vindo, Rafael!</h1>
    <p>Esta é a área privada do seu portfólio.</p>
    <a href="logout.php">Sair</a>
</body>
</html>

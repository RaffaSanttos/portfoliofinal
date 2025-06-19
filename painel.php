<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: devmode.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Área Restrita</title>
</head>
<body style="background: #111; color: white; font-family: monospace;">
    <h1>Bem-vindo, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <p><a href="logout.php" style="color: red;">// Sair</a></p>
</body>
</html>

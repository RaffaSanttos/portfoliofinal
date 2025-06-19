<?php
session_start();

// Conectar ao banco
$conn = new mysqli("localhost", "root", "", "portfolio_login");
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Verificar se foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['logon'];
    $password = $_POST['password'];

    // Buscar o usuário no banco
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();

    // Verifica se o usuário existe
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verifica a senha
        if (password_verify($password, $user['password'])) {
            $_SESSION['authenticated'] = true;
            header("Location: painel.php");
            exit();
        }
    }

    // Se falhar
    echo "<script>alert('Usuário ou senha inválidos.'); window.history.back();</script>";
}
?>

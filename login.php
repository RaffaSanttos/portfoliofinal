<?php
session_start();
$db = new SQLite3('users.db');

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $db->prepare('SELECT * FROM user WHERE email = :email AND password = :password');
$stmt->bindValue(':email', $email, SQLITE3_TEXT);
$stmt->bindValue(':password', $password, SQLITE3_TEXT);
$result = $stmt->execute();

if ($row = $result->fetchArray()) {
    $_SESSION['loggedin'] = true;
    header('Location: dashboard.php');
    exit;
} else {
    header('Location: login.html?error=1');
    exit;
}
?>

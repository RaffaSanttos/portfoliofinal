<?php
session_start();
$db = new SQLite3('users.db');

$email = $_POST['logon'];
$password = $_POST['password'];

$stmt = $db->prepare('SELECT * FROM user WHERE logon = :logon AND password = :password');
$stmt->bindValue(':logon', $logon, SQLITE3_TEXT);
$stmt->bindValue(':password', $password, SQLITE3_TEXT);
$result = $stmt->execute();

if ($row = $result->fetchArray()) {
    $_SESSION['loggedin'] = true;
    header('Location: dashboard.php');
    exit;
} else {
    header('Location: devmode.html?error=1');
    exit;
}
?>

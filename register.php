<?php
session_start();

include_once('config/db.php');
include_once('includes/functions.php');

if (isLoggedIn()) {
    redirectTo('dashboard.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = sanitizeInput($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $db->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->execute([$username, $password]);

    redirectTo('login.php');
}
?>


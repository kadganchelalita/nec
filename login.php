<?php
session_start();

include_once('config/db.php');
include_once('includes/functions.php');
if (isLoggedIn()) {
    redirectTo('dashboard.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = sanitizeInput($_POST['uname']);
    $password = $_POST['psw'];
   
    $stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        redirectTo('dashboard.php');
    }
}
?>

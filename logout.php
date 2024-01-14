<?php
session_start();
session_destroy();
redirectTo('login.php');
?>

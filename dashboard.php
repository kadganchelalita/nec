<?php
session_start();

include_once('includes/functions.php');

if (!isLoggedIn()) {
    redirectTo('login.php');
}
?>
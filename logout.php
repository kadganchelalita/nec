<?php
session_start();
session_destroy();
$url = "index.html";
header('Location: '.$url);
?>

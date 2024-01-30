<?php
session_start();

include_once('config/db.php');
include_once('includes/functions.php');

if (!isLoggedIn()) {
    redirectTo('index.html');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle file upload (you should add proper validations and error handling)
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["file"]["name"]);

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
        // File uploaded successfully
        echo "File uploaded!";
    } else {
        // Error in file upload
        echo "Error uploading file.";
    }
}
?>
<a href="logout.php">
  <button>Logout</button>
</a>

<?php
session_start();

include_once('includes/functions.php');

if (!isLoggedIn()) {
    redirectTo('login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
</head>
<body>

<h2>Upload Form</h2>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="upload.php" method="post" enctype="multipart/form-data">
    <div class="container">
      <label for="file"><b>Upload File</b></label>
      <input type="file" placeholder="Upload file" name="file" required>
      <button type="submit">File Upload</button>
      
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id02');
document.getElementById('id02').style.display='block'
</script>

</body>
</html>

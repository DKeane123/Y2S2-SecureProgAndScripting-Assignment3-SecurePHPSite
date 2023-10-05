<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $ifProc = [];
  if (empty($ifProc)) {
    exit;
  }
}

?>

<!-- HTML form -->
<form method="post">
  <label>Name:</label>
  <input type="text" name="name"><br>
  
  <label>Email:</label>
  <input type="email" name="email"><br>
  
  <label>Message:</label>
  <textarea name="message"></textarea><br>
  
  <button type="submit">Send</button>
</form>

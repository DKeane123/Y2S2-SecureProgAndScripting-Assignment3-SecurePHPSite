<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//Three variables that are in the GET request method.
  $name = $_GET['name'];
  $email = $_GET['email'];
  $message = $_GET['message'];
  $ifProc = [];
  
  if (empty($ifProc)) {
    exit;
  }
}
?>

<!-- HTML form -->
<form method="get">
  <label>Name:</label>
  <input type="text" name="name"><br>
  
  <label>Email:</label>
  <input type="email" name="email"><br>
  
  <label>Message:</label>
  <textarea name="message"></textarea><br>
  
  <button type="submit">Send</button>
</form>

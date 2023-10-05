<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

if (isset($_GET['search'])) {
  $query = $_GET['search'];
  echo "You searched for: " . $query;
}

  // Validate form data (optional)
  $errors = [];
  if (empty($name)) {
    $errors[] = 'Name is required.';
  }
  if (empty($email)) {
    $errors[] = 'Email is required.';
  }
  if (empty($message)) {
    $errors[] = 'Message is required.';
  }
  
  // If there are no errors, send an email
  if (empty($errors)) {
    $to = 'youremail@example.com';
    $subject = 'New message from ' . $name;
    $body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\n";
    mail($to, $subject, $body, $headers);
    
    // Redirect to a thank-you page (optional)
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

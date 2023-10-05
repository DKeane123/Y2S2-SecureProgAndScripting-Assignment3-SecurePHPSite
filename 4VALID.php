<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  //The studentnum field will only accept numbers as a valid input
  $studentnum = filter_input(INPUT_POST, 'studentnum', FILTER_VALIDATE_INT);
  //The message field will take whatever is entered and convert is to html characters which stop any scripts from being run
  $message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

  //Array to make if statement run
  $ifProc = [];
  //Checks if the name field is empty. If this is the case then it returns an error
  if (empty($name)) {
    echo 'Name is required!!!';
  }
  //Checks if the email address is in a valid format. If it isnt then it reurns an error
  if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $_POST['email'])) {
    echo 'Invalid Email!!!';
  }
  //Checks if the student num field has only numbers in it. If not then it returns an error 
  if (!$studentnum) {
    echo  'Student Number must only be intergers!!!';
  }
  
  if (empty($ifProc)) {
    echo $message;
    exit;
  }
}

?>

<form method="post">
  <label>Name:</label>
  <input type="text" name="name"><br>
  
  <label>Email:</label>
  <input type="text" name="email"><br>
  
  <label>Student Number:</label>
  <input type="text" name="studentnum"><br>

  <label>Message:</label>
  <textarea name="message"></textarea><br>
  
  <button type="submit">Send</button>
</form>

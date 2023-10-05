<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //Two variable that take the form data 
  $name = $_POST['name'];
  $county = $_POST['county'];
  $ifProc = [];  
  if (empty($ifProc)) {
    exit;
  }
}
?>

<!-- HTML form -->
<form method="post">
  <label>Name:</label>
  <input type="text" maxlength="50" name="name"><br>
  
  <label>County:</label>
  <input type="text" name="county" value="Waterford" readonly="true" >
  <button type="submit">Send</button>
</form>

<html>
<form method="GET" action="index.php">
Please enter your name : <input type = "text" name="nm">
  <input type="submit" value= "Submit">
</form>
</html>

<?php
if(isset($_GET['nm']))
{
  $nm = $_GET['nm'];

  echo "Hi $nm";
} 
?>

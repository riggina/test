<?php
$mysqli = new mysqli("remotemysql.com","l0V8oibeKZ","de4KJpD4Cq","l0V8oibeKZ");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
} else {
  echo "Yep Database Connected";
}

?>

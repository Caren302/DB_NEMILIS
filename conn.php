<?php
  $conn=mysqli_connect('localhost', 'root', '', 'inventario');
  
  if(!$conn){
    die("Error: Failed to connect to database!");
  }
?>
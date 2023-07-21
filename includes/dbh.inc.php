<?php

$conn = new mysqli("localhost","root","","loginsystem2");

// Check connection
if (!$conn) {
  die("Connection Failed: ".mysql_connect_error());
}



 
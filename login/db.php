<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'winkeltje2';
$db_port = 8888;

$mysqli = new mysqli(
  $db_host,
  $db_user,
  $db_password,
  $db_db,
  $db_port
);

if ($mysqli->connect_error) {
  echo 'Errno: ' . $mysqli->connect_errno;
  echo '<br>';
  echo 'Error: ' . $mysqli->connect_error;
  exit();
}

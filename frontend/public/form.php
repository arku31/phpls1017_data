<?php

$login = $_REQUEST['name'];
$password = $_REQUEST['pwd'];


$data= [
  'login' => $login,
  'password' => $password
];

echo json_encode($data);